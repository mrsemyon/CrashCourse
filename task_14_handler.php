<?php
    session_start();

    function getUser($pdo, $email)
    {
        $sql = "SELECT password FROM users WHERE email=:email";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email]);
        $data = $statement->fetch();
        return $data;
    }
    function checkPassword($pdo, $inputPassword, $dbPassword)
    {
        return password_verify($inputPassword, $dbPassword);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;

    $host = '127.0.0.1';
    $db   = 'task_11';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $data = getUser($pdo, $email);

    if (! empty($data)) {
        if (checkPassword($pdo, $password, $data['password'])) {
            $_SESSION['alert']['success'] = true;
            header("Location: /task_14.php");
            exit;
        }
    }

    $_SESSION['alert']['danger'] = true;

    header("Location: /task_14.php");
?>