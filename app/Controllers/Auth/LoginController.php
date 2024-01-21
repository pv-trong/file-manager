<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->renderWithLayout('auth/login', 'auth-layout');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $isLogin = $this->user->login($username, $password);
        if ($isLogin) {
            session_flash_set('message',[
                'type'=> 'Success',
                'message'=> 'Login successfully!'
            ]);
        } else {
            session_flash_set('message',[
                'type'=> 'Danger',
                'message'=> 'Login failed!'
            ]);
            header("Location: /login");
            exit();
        }
        header("Location: /backend/dashboard");
    }

    public function logout()
    {
        $logout = $this->user->logout();
        if ($logout) {
            header("Location: /");
        }
    }
}