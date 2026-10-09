<?php
    include 'includes/db.php';
    include 'includes/header.php';
?>
<div class="form-container">
    <div></div>
    <form method="POST" action="processes/signup.php" class="form">
        <input class="form-input" type="text" name="username" placeholder="Username" required>
        <input class="form-input" type="email" name="email" placeholder="Email" required>
        <input class="form-input" type="password" name="password" placeholder="Password" required>
        <input class="form-input" type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button class="form-button" type="submit">Sign Up</button>
    </form>
    <div></div>
</div>

<?php
    include 'includes/footer.php';
?>