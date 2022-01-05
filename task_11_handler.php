<?php
    session_start();

    function getUser($pdo, $email)
    {
        $sql = "SELECT * FROM users WHERE email=:email";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email]);
        return $statement->fetch();
    }
    function addUser($pdo, $email, $password)
    {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $statement = $pdo->prepare($sql);
        $statement->execute(['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);
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

    if (! empty(getUser($pdo, $email))) {
        $_SESSION['alert'] = true;
        header("Location: /task_11.php");
        exit;
    }

    addUser($pdo, $email, $password);

    header("Location: /task_11.php");
?>