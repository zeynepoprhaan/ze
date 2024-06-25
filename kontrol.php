<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: Anasayfa.php");
        exit();
    } else {
        $error_message = "Şifre yanlış";
    }
} else {
    $error_message = "Kullanıcı adı bulunamadı";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Hatası</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .error-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .error-container h2 {
            margin-bottom: 20px;
            color: red;
        }
        .error-container p {
            margin-bottom: 20px;
        }
        .error-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .error-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h2>Giriş Hatası</h2>
        <p><?php echo $error_message; ?></p>
        <a href="index.php">Tekrar Dene</a>
    </div>
</body>
</html>
