<?php // handle sign up requests

    include('../includes/header.php');
    include('../includes/db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $email = trim($_POST['email'] ??'');
        $confirmPassword = $_POST['confirm_password'] ?? '';

        if ($password !== $confirmPassword) {
            echo 'Passwords do not match.';
        } else {
            $check = $pdo->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
            $check->execute([
                ':username' => $username,
                ':email' => $email
            ]);

            if ($check->fetch(PDO::FETCH_ASSOC)) {
                echo 'That username or email is already taken.';
            } else {

                $sql = 'INSERT INTO users (username, password, email) VALUES (:username, :password, :email)';
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':username' => $username,
                    ':password' => $password_hash,
                    ':email' => $email
                ]);
                echo 'Account created. You can now log in.';
                header('Location: ../index.php');
                exit();
            }
        }
    }

    include('../includes/footer.php');
?>