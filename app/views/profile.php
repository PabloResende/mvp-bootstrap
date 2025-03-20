<?php require __DIR__ . '/layout/header.php'; ?>

<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card p-4 text-center" style="width: 400px;">
    <img src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($_SESSION['user']['email']))); ?>?s=100" 
         class="rounded-circle mb-3" alt="Avatar">
    <h2><?php echo htmlspecialchars($_SESSION['user']['name']); ?></h2>
    <p class="text-muted"><?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
    <a href="/mvp-bootstrap/public/logout" class="btn btn-danger w-100">Logout</a>
  </div>
</div>

<?php require __DIR__ . '/layout/footer.php'; ?>
