<?php
    include 'includes/db.php';
    include 'includes/header.php';
?>

<form method="POST" action="processes/login.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>



<?php
    include 'includes/footer.php';
?>