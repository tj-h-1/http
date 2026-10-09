<?php
    include("includes/header.php");
?>

<!-- Add any divs needed to fit the header and footer above and below the form block -->
<!-- Currently sends form data to createpost.php to be processed, does not send user back to a page yet -->
<form method="POST" action="functions/createpost.php">
    Give your post a title.<br>
    <input type="text" class="post-title" required><br><br>
    Create your Post!<br>
    <textarea name="content" cols="40" class="post-content"></textarea><br>
    <input type="submit" name="post-submit" class="post-submit" value="Create!">
</form>

<?php
    include("includes/footer.php");
?>