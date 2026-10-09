<?php 
    function FetchArray() {

        include 'includes/db.php';

        $sql = 'SELECT * FROM posts';

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }
?>