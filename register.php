<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Реєстрація на ТБ-онлайн</title>
    <link rel='stylesheet' href='style.css'>
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
            position: relative;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .registration {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative; /* Добавляем позиционирование */
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
        input[type='text'],
        input[type='email'],
        input[type='password'] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px; 
            margin-bottom: 10px; 
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px; 
        }
         img.logo {
            position: absolute;
            top: 5px;
            left: 20px;
            width: 100px;
            height: auto;
            cursor: pointer;
        }
        }
    </style>
</head>
<body>
    <header>
        <img class='logo' src='/images/logogo.jpg' alt='Логотип' onclick=\"window.location.href='index.php'\">
        <h1>Реєстрація</h1>
    </header>
    <main>
        <section class='registration'>
            <h2>Створити новий обліковий запис</h2>
            <form action='register.php' method='post'>
                <label for='name'>Ім'я:</label>
                <input type='text' id='name' name='name' required>
                <label for='email'>Email:</label>
                <input type='email' id='email' name='email' required>
                <label for='password'>Пароль:</label>
                <input type='password' id='password' name='password' required>
                <button type='submit'>Зареєструватися</button>
            </form>
            <p>Уже маєте обліковий запис? <a href='login.php'>Увійти</a></p>
        </section>
    </main>
    <footer style='position: fixed; bottom: 0; width: 100%; text-align: center; background-color: #333; color: #fff; padding: 10px 0;'>
        <p>© 2024 Всі права захищені.</p>
    </footer>
</body>
</html>";
?>
