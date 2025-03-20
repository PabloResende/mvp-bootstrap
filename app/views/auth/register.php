<?php require __DIR__ . '/../layout/header.php'; ?>
<h2 class="text-center mb-4">Register</h2>
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-4">
    <form action="/mvp-bootstrap/public/store" method="POST">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success w-100">Register</button>
    </form>
  </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
