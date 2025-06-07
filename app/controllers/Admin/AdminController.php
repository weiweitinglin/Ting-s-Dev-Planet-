<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class AdminController extends Controller {
    protected function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    protected function isAdmin() {
        return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
    }

    protected function requireLogin() {
        if (!$this->isLoggedIn()) {
            header('Location: /admin/login');
            exit;
        }
    }

    protected function requireAdmin() {
        $this->requireLogin();
        if (!$this->isAdmin()) {
            header('Location: /');
            exit;
        }
    }
}