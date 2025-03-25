<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVP Bootstrap</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-600 p-4 text-white flex justify-between">
        <a href="/mvp-bootstrap/public/" class="font-bold">MVP</a>
        <div>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="/mvp-bootstrap/public/dashboard" class="px-4">Dashboard</a>
                <a href="/mvp-bootstrap/public/profile" class="px-4">Perfil</a>
                <a href="/mvp-bootstrap/public/logout" class="px-4">Logout</a>
            <?php else: ?>
                <a href="/mvp-bootstrap/public/login" class="px-4">Login</a>
                <a href="/mvp-bootstrap/public/register" class="px-4">Register</a>
            <?php endif; ?>
        </div>
    </nav>
