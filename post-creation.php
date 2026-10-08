<?php
    include("includes/header.php");
?>

<form method="POST" action="functions/createpost.php">
    Create your Post!<br>
    <input type="text" name="content" class="post-content">
    <input type="submit" name="post-submit" class="post-submit" value="Create!">
</form>

<?php
    include("includes/footer.php");
?>