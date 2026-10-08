<?php // handle sign up requests

    include('db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        if ($password !== $confirmPassword) {
            echo 'Passwords do not match.';
        } else {
            $check = $pdo->prepare('SELECT * FROM users WHERE username = :username');
            $check->execute([':username' => $username]);

            if ($check->fetch(PDO::FETCH_ASSOC)) {
                echo 'That username is already taken.';
            } else {

                $sql = 'INSERT INTO users (username, password) VALUES (:username, :password)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':username' => $username,
                    ':password' => $password
                ]);

                echo 'Account created. You can now log in.';
            }
        }
    }
?>