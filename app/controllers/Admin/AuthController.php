<?php
namespace App\Controllers\Admin;

use App\Models\User;

class AuthController extends AdminController {
    private $userModel;

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->findByUsername($username);
            
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_role'] = $user['role'];
                
                header('Location: /admin/dashboard');
                exit;
            }
            
            $data['error'] = '帳號或密碼錯誤';
        }

        $data['title'] = '管理員登入';
        $this->view('admin/login', $data);
    }

    public function logout() {
        session_destroy();
        header('Location: /');
        exit;
    }
}