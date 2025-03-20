</div> <!-- container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div> <!-- container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const toggleDarkMode = document.getElementById('toggle-dark-mode');
    const body = document.body;

    // Verifica e aplica o tema salvo no localStorage
    const savedTheme = localStorage.getItem('theme') || 'light-mode';
    body.classList.add(savedTheme);

    // Alterna entre os temas ao clicar no botão
    toggleDarkMode.addEventListener('click', () => {
      const newTheme = body.classList.contains('light-mode') ? 'dark-mode' : 'light-mode';
      body.classList.remove('light-mode', 'dark-mode');
      body.classList.add(newTheme);
      localStorage.setItem('theme', newTheme);
    });
  });
</script>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
  $(document).ready(function() {
    $('.phone-mask').mask('(00) 00000-0000');
    $('.cpf-mask').mask('000.000.000-00');
  });
</script>
</body>
</html>
