<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Giriş Yap</h2>
            <form action="kontrol.php" method="post">
                <div class="input-group">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-container">
                    <button type="submit">Giriş Yap</button>
                    <a href="Anasayfa.php" class="home-button">Anasayfa</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
