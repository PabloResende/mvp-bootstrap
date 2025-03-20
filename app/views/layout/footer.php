</div> <!-- container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggleDarkMode = document.getElementById('toggle-dark-mode');
    const body = document.body;
    const navbar = document.querySelector('.navbar');

    // Função para definir o tema
    function setTheme(theme) {
      body.classList.remove('light-mode', 'dark-mode');
      body.classList.add(theme);
      navbar.classList.remove('light-mode', 'dark-mode');
      navbar.classList.add(theme);
      localStorage.setItem('theme', theme);
    }

    // Verifica e aplica a preferência salva
    const savedTheme = localStorage.getItem('theme') || 'light-mode';
    setTheme(savedTheme);

    // Alterna o tema quando o botão é clicado
    toggleDarkMode.addEventListener('click', () => {
      const newTheme = body.classList.contains('light-mode') ? 'dark-mode' : 'light-mode';
      setTheme(newTheme);
    });
  });
</script>
</body>
</html>
