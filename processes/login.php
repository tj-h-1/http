<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $sql = 'SELECT * FROM users WHERE username = :username';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $user]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row && $password === $row['password']) {
            echo 'Login successful!';
            $_SESSION['username'] = $user;
        } else {
            echo 'Incorrect username or password.';
        }
    }
?>