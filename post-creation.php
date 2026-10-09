<?php
    include("includes/header.php");
?>

<div class="post-form">
<!-- Add any divs needed to fit the header and footer above and below the form block -->
<!-- Currently sends form data to createpost.php to be processed, does not send user back to a page yet -->
<form method="POST" action="functions/createpost.php">
    <div class="post-form-box">
        <label for="post-title">Give your post a title.</label>
        <input type="text" id="post-title" class="post-title" required>
    </div>

    <div class="post-form-box">
        <label for="post-content">Create your Post!</label>
        <textarea name="content" id="post-content" class="post-content"></textarea>
        <input type="submit" name="post-submit" class="post-submit" value="Create!">
    </div>
</form>
</div>

<?php
    include("includes/footer.php");
?>