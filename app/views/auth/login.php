<?php require __DIR__ . '/../layout/header.php'; ?>
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card p-4" style="width: 350px;">
    <h2 class="text-center mb-3">Login</h2>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <form action="/mvp-bootstrap/public/auth" method="POST">
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
