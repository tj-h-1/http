<?php
    include("../includes/db.php");

    /* Gets form data, datetime, and user id from a session (not yet working) and inserts to posts table */
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $blog_title = $_POST['title'];
        $blog_content = $_POST['content'];

        $now = new DateTimeImmutable();
        $current_date = $now->format('Y-m-d H:i:s');

        $sql = "INSERT INTO posts (user_id, date_created, content, blog_title) VALUES (:user_id, :date_created, :content, :blog_title)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':user_id' => $_SESSION['user_id'],
            ':date_created' => $current_date,
            ':content' => $blog_content,
            ':blog_title' => $blog_title,
        ]);
        header('Location: ../index.php');
        exit();
    }