<?php require __DIR__ . '/../layout/header.php'; ?>

<div class="p-6">
    <h1 class="text-2xl font-bold">Welcome, <?php echo htmlspecialchars($_SESSION['user']['name']); ?>!</h1>
    <p class="mt-4">This is your dashboard.</p>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>
