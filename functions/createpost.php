<?php
    include("../includes/db.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $blog_content = $_POST['content'];

        $now = new DateTimeImmutable();
        $current_date = $now->format('Y-m-d H:i:s');

        $sql = "INSERT INTO posts (user_id, date_created, content) VALUES (:user_id, :date_created, :content)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':user_id' => $_SESSION['user_id'],
            ':date_created' => $current_date,
            ':content' => $blog_content,
        ]);
    }