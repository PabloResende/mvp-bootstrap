<?php
session_start();
require_once __DIR__ . '/../models/User.php';  // Corrigido

class UserController {
    public function login() {
        require __DIR__ . '/../views/auth/login.php';
    }

    public function authenticate() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: /mvp-bootstrap/public/profile');
            exit;
        } else {
            $error = "Invalid email or password.";
            require __DIR__ . '/../views/auth/login.php';
        }
    }

    public function register() {
        require __DIR__ . '/../views/auth/register.php';
    }

    public function store() {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($name && $email && $password) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $userModel = new User();
            $userModel->create($name, $email, $hashedPassword);
            header('Location: /mvp-bootstrap/public/login');
            exit;
        }
    }

    public function profile() {
        if (!isset($_SESSION['user'])) {
            header('Location: /mvp-bootstrap/public/login');
            exit;
        }
        require __DIR__ . '/../views/profile/dashboard.php';
    }

    public function logout() {
        session_destroy();
        header('Location: /mvp-bootstrap/public/login');
        exit;
    }
}
