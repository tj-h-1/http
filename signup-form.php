<?php
    include 'includes/db.php';
    include 'includes/header.php';
?>

<form method="POST" action="processes/signup.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <button type="submit">Sign Up</button>

</form>

<?php
    include 'includes/footer.php';
?>