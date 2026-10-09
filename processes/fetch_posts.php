<?php 
    function FetchArray() {

        include 'includes/db.php';

        $sql = 'SELECT * FROM posts';

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    function FetchPost($blog_title) {
        include 'includes/db.php';

        $sql = 'SELECT * FROM posts WHERE blog_title = :blog_title';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':blog_title' => $blog_title]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
?>