<?php 
include('../includes/header.php');
include('../includes/db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = 'SELECT * FROM users WHERE username = :username';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $user]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row && password_verify($password, $row['password'])) {
            echo 'Login successful!';
            $_SESSION['username'] = $user;
            $_SESSION['user_id'] = $row['user_id'];

            header('Location: ../index.php');
            exit();
        } else {
            echo 'Incorrect username or password.';
        }
    }
    include('../includes/footer.php');
?>