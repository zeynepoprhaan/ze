<?php
include 'db.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Şifreyi hashleyin

// Kullanıcı adının daha önce kullanılıp kullanılmadığını kontrol edin
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Eğer kullanıcı adı daha önce kullanılmışsa hata mesajı gösterin
    echo "Bu kullanıcı adı zaten kullanılıyor. Lütfen başka bir kullanıcı adı seçin.";
} else {
    // Kullanıcı adı kullanılmamışsa yeni kaydı ekleyin
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        // Kayıt başarılıysa Anasayfa.html sayfasına yönlendirin
        header("Location: Anasayfa.php");
        exit();
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
