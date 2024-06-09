<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Перевірка вхідних даних тут може бути
    // Наприклад, перевірка в базі даних
    // Якщо вірно, перенаправити на dashboard.php
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід до ТБ-онлайн</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .login {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        h2 {
            margin-top: 0;
        }
        p {
            margin-top: 10px;
        }
        a {
            color: #333;
            text-decoration: none;
        }
        button {
            display: block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin: 20px auto 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px; /* Зменшив відстань */
            margin-bottom: 10px; /* Додав відстань знизу */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px; /* Збільшив відстань */
        }
		img.logo {
            position: absolute;
            top: 5px;
            left: 20px;
            width: 100px;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
	<img class='logo' src='/images/logogo.jpg' alt='Логотип' onclick=\"window.location.href='index.php'\">
        <h1>Вхід</h1>
    </header>
    <main>
        <section class="login">
            <h2>Увійти до свого облікового запису</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" style="width: calc(100% - 22px);"><br>
                <label for="password">Пароль:</label><br>
                <input type="password" id="password" name="password" style="width: calc(100% - 22px);"><br>
                <button type="submit">Увійти</button>
            </form>
            <p>Не маєте облікового запису? <a href="register.php">Зареєструватися</a></p>
        </section>
    </main>
    <footer style="position: fixed; bottom: 0; width: 100%; text-align: center; background-color: #333; color: #fff; padding: 10px 0;">
        <p>© 2024 Всі права захищені.</p>
    </footer>
</body>
</html>
