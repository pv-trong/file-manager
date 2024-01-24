<?php

namespace App\Models;

class User extends Model
{
    protected string $table = 'users';
    protected array $fields = ['id', 'password', 'username', 'email', 'role', 'created_at'];
    protected array $hidden = ['password'];
    private string $loginWith = 'username';
    protected string $format_create = 'Y/m/d H:i:s';

    public function register($user_data): bool
    {
        $data_insert = array_merge($user_data,
            ['password' => password_hash($user_data['password'], PASSWORD_DEFAULT)]
        );
        $existed = $this->findBy($this->loginWith, $user_data[$this->loginWith]);
        if ($existed) {
            return false;
        }
        return $this->insert($data_insert);
    }

    public function login($username, $password): bool
    {
        $stmt = $this->model->prepare("SELECT * FROM {$this->table} WHERE {$this->loginWith} = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                session_set('auth', $user);
                $stmt->close();
                $this->model->close();
                return true;
            }
        }
        $stmt->close();
        $this->model->close();
        return false;
    }

    public function logout(): bool
    {
        if (session_existed('auth')) {
            session_forget('auth');
            return true;
        }
        return false;
    }
}