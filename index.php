<?php
        include 'includes/header.php';
?>
<div class="container">
        <?php include 'includes/nav.php'; ?>
<div class = "main_page">
    <?php 
    include 'processes/fetch_posts.php';

        $posts = FetchArray();
        for ($post = 0; $post < count($posts); $post++) {
            $title = $posts[$post]['blog_title'];
            $title = preg_replace('/\s+/', '_', $title);
            echo '<div><a href=post.php?blogname=' . $title . '>'. $posts[$post]['blog_title'] . '</a></div>';
        }
    ?>
</div>
</div>
<?php
    include 'includes/footer.php';
?>