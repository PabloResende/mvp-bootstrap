<?php require __DIR__ . '/../layout/header.php'; ?>
<h2 class="text-center mb-4">Register</h2>
<div class="row justify-content-center">
  <div class="col-md-6 col-lg-4">
    <form action="/mvp-bootstrap/public/store" method="POST" enctype="multipart/form-data">
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
      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control phone-mask">
      </div>
      <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control cpf-mask">
      </div>
      <div class="mb-3">
        <label>Address</label>
        <input type="text" name="address" class="form-control">
      </div>
      <div class="mb-3">
        <label>About</label>
        <textarea name="about" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label>Profile Picture</label>
        <input type="file" name="profile_picture" class="form-control">
      </div>
      <button type="submit" class="btn btn-success w-100">Register</button>
    </form>
  </div>
</div>
<?php require __DIR__ . '/../layout/footer.php'; ?>
