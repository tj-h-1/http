<?php
        include 'includes/header.php';

        include 'includes/nav.php';
?>
<div class="main_content">
<?php
        include 'processes/fetch_posts.php';

        if (isset($_GET['blogname'])) {
        $blogname = $_GET['blogname'];
        }

        $blogname = str_replace('_', ' ', $blogname);

        $post_data = FetchPost($blogname);

        echo '<div>' . $post_data['blog_title'] . '</div>
        <div>' . $post_data['content'] . '</div>';
?>
<div>
<?php
    include 'includes/footer.php';
?>