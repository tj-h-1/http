<?php
        include 'includes/header.php';
        include 'includes/db.php';

        include 'processes/fetch_posts.php';

        $posts = FetchArray();
        for ($post = 0; $post < count($posts); $post++) {
            $title = $posts[0]['blog_title'];
            $title = preg_replace('/\s+/', '', $title);
            echo '<a href=post.php?blogname="' . $title . '">'. $posts[0]['blog_title'] . '</a>';
        }
?>

<?php
    include 'includes/footer.php';
?>