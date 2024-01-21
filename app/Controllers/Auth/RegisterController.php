<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->renderWithLayout('auth/register', 'auth-layout');
    }

    public function register()
    {
        $data = [
            'username'=> $_POST['username'],
            'password'=> $_POST['password'],
            'email'=> $_POST['email'],
            'role'=> $_POST['role'] ?? 'staff',
            'created_at'=> date('Y/m/d H:i:s'),
        ];
        $isCreated = $this->user->register($data);
        if ($isCreated) {
            session_flash_set('message',[
                'type'=> 'Success',
                'message'=> 'Register successfully!'
            ]);
            header("Location: /login");
            exit();
        } else {
            session_flash_set('message',[
                'type'=> 'Danger',
                'message'=> 'Username name already exists!'
            ]);
        }
        header("Refresh:0");
    }
}