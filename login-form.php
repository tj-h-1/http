<?php
    include 'includes/db.php';
    include 'includes/header.php';
?>
<div class="form-container">
    <form method="POST" action="processes/login.php" class="login-form">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<?php
    include 'includes/footer.php';
?>