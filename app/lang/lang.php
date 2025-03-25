<?php
// Garante que a sessão só será iniciada se ainda não estiver ativa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Definição do idioma com prioridade: GET → Sessão → Cookie → Padrão (pt)
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, time() + (86400 * 30), "/");
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'pt';
}

$langFile = __DIR__ . "/{$lang}.php";
if (!file_exists($langFile)) {
    $langFile = __DIR__ . "/pt.php";
}

// Carrega as traduções
$langText = require $langFile;
?>
