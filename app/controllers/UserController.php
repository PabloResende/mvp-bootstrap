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

    public function logout() {
        session_destroy();
        header('Location: /mvp-bootstrap/public/login');
        exit;
    }

    public function profile() {
    if (!isset($_SESSION['user'])) {
        header('Location: /mvp-bootstrap/public/login');
        exit;
    }
    require_once __DIR__ . '/../views/profile.php';
}

public function updateProfile() {
    if (!isset($_SESSION['user'])) {
        header('Location: /mvp-bootstrap/public/login');
        exit;
    }

    $userId = $_SESSION['user']['id'];
    $address = $_POST['address'] ?? '';
    $about = $_POST['about'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    
    // Atualizar dados no banco
    $stmt = $this->db->prepare("UPDATE users SET address = ?, about = ?, phone = ?, cpf = ? WHERE id = ?");
    $stmt->execute([$address, $about, $phone, $cpf, $userId]);

    $_SESSION['user']['address'] = $address;
    $_SESSION['user']['about'] = $about;
    $_SESSION['user']['phone'] = $phone;
    $_SESSION['user']['cpf'] = $cpf;

    header('Location: /mvp-bootstrap/public/profile');
}

}
