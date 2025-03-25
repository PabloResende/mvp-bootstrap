<?php require __DIR__ . '/../layout/header.php'; ?>

<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-96">
        <h2 class="text-2xl mb-4">Login</h2>
        <?php if(isset($error)): ?>
            <div class="text-red-500"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form action="/mvp-bootstrap/public/auth" method="POST">
            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" class="border p-2 w-full" required>
            </div>
            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="border p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white p-2 w-full">Login</button>
        </form>
    </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>
