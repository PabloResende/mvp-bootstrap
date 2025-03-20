<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mvp-bootstrap/public/css/style.css">
</head>
<body class="light-mode">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="/mvp-bootstrap/public/">MVP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php if (isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="/mvp-bootstrap/public/profile">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mvp-bootstrap/public/logout">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="/mvp-bootstrap/public/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mvp-bootstrap/public/register">Register</a>
          </li>
        <?php endif; ?>
      </ul>
      <button id="toggle-dark-mode" class="btn btn-outline-dark ms-3">🌙</button>
    </div>
  </div>
</nav>
<div class="container mt-4">
