<?php
    require_once "../../config/koneksi.php";

    session_start();

    if (isset($_POST['sign_in'])) {
        header("Location: ../start/logout.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../start/start.css">
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <h1>HomePage</h1>
        <form method="POST">
            <div class="button-group">
                <button type="submit" name="sign_in" class="button1">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>