<?php require __DIR__ . '/layout/header.php'; ?>

<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card p-4 text-center" style="width: 400px;">
    <img src="<?php echo !empty($_SESSION['user']['profile_picture']) ? '/mvp-bootstrap/public/uploads/' . $_SESSION['user']['profile_picture'] : 'https://via.placeholder.com/100'; ?>" 
         class="rounded-circle mb-3" alt="Avatar" width="100">

    <h2><?php echo htmlspecialchars($_SESSION['user']['name']); ?></h2>
    <p class="text-muted"><?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>

    <form action="/mvp-bootstrap/public/update_profile" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($_SESSION['user']['address'] ?? ''); ?>">
      </div>

      <div class="mb-3">
        <label>Sobre Mim</label>
        <textarea name="about" class="form-control"><?php echo htmlspecialchars($_SESSION['user']['about'] ?? ''); ?></textarea>
      </div>

      <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo htmlspecialchars($_SESSION['user']['phone'] ?? ''); ?>">
      </div>

      <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control" id="cpf" value="<?php echo htmlspecialchars($_SESSION['user']['cpf'] ?? ''); ?>">
      </div>

      <div class="mb-3">
        <label>Foto de Perfil</label>
        <input type="file" name="profile_picture" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary w-100">Salvar Alterações</button>
    </form>

    <a href="/mvp-bootstrap/public/logout" class="btn btn-danger w-100 mt-3">Logout</a>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const phone = document.getElementById('phone');
    const cpf = document.getElementById('cpf');

    phone.addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, "").replace(/^(\d{2})(\d)/g, "($1) $2").replace(/(\d{5})(\d)/, "$1-$2");
    });

    cpf.addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, "").replace(/(\d{3})(\d)/, "$1.$2")
                              .replace(/(\d{3})(\d)/, "$1.$2")
                              .replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    });
});
</script>

<?php require __DIR__ . '/layout/footer.php'; ?>
