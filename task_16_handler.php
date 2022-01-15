<pre>
<?php
if (! empty($_FILES)) {
    move_uploaded_file(
        $_FILES['image']['tmp_name'], __DIR__ .
        '/upload/' . uniqid() . '.' .
        pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    header("Location: /task_16.php");
}
