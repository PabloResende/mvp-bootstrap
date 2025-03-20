<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="text-center">
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']['name']); ?>!</h2>
  <p class="lead">You're logged in with email: <?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
  <a href="/mvp-bootstrap/public/logout" class="btn btn-outline-danger mt-3">Logout</a>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
