<?php
    include("includes/header.php");
?>

<!-- Add any divs needed to fit the header and footer above and below the form block -->
<!-- Currently sends form data to createpost.php to be processed, does not send user back to a page yet -->
<form method="POST" action="functions/createpost.php">
    Create your Post!<br>
    <input type="text" name="content" class="post-content"><br>
    <input type="submit" name="post-submit" class="post-submit" value="Create!">
</form>

<?php
    include("includes/footer.php");
?>