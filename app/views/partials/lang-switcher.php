<div class="language-switcher relative inline-block text-left">  
    <select id="language-select" class="bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" onchange="changeLanguage(this.value)">  
        <option value="pt" <?= $lang === 'pt' ? 'selected' : '' ?>>🇧🇷 Português</option>  
        <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>🇺🇸 English</option>  
        <option value="de" <?= $lang === 'de' ? 'selected' : '' ?>>🇩🇪 Deutsch</option>  
    </select>  
</div>  

<script>
    function changeLanguage(lang) {
        let currentUrl = window.location.pathname; // Mantém a rota correta
        let newUrl = currentUrl + "?lang=" + lang;
        window.location.href = newUrl;
    }
</script>
