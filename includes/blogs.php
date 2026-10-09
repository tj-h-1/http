<div class = "main_page">
    <div class = "blog_container">
    <?php 
    include 'processes/fetch_posts.php';
    include 'processes/tools.php';

        $posts = FetchArray();
        for ($post = 0; $post < count($posts); $post++) {
            $title = $posts[$post]['blog_title'];
            $title = preg_replace('/\s+/', '_', $title);
            echo '<a href=post.php?blogname=' . $title . '>
            <div class = "blog">
            <div class = "blog-title">'. Title($posts[$post]['blog_title']) . '</div>
            <div class = "blog-snippet">' . LimitCharacters($posts[$post]['content'], 200) .
            '</div>
            </div></a>';
        }
    ?>
    <div>
</div>