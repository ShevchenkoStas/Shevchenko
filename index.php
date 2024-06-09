<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТБ-онлайн</title>
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
            position: relative;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .landing {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Добавлено выравнивание текста по центру */
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
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        a:hover {
            background-color: #555;
        }
        footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
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
        <img class="logo" src="/images/logogo.jpg" alt="Логотип" onclick="window.location.href=\'index.php\'">
        <h1>ПІДПИСКА НА ТБ ОНЛАЙН</h1>
    </header>
    <main>
        <section class="landing">
            <h2>Ласкаво просимо до нашого сервісу</h2>
            <p>Наш сервіс з підпискою на онлайн телебачення України надає можливість користувачам отримувати доступ до улюблених телевізійних каналів через Інтернет у будь-який час і з будь-якого пристрою. Ми пропонуємо широкий вибір каналів українського та міжнародного ефіру, включаючи новини, розважальні програми, спортивні події, кіно та багато іншого.</p>

<p>Користувачі можуть легко зареєструватися на нашому сайті, вибрати підписку, яка відповідає їхнім потребам, та насолоджуватися переглядом улюблених програм в режимі онлайн. Наш сервіс надає зручний і доступний спосіб отримати доступ до телебачення без необхідності установки додаткового обладнання або підписки на кабельне телебачення.</p>
            <a href="register.php">Зареєструватися</a>
            <a href="dashboard.php">Перейти до кабінету користувача</a>
        </section>
    </main>
    <footer>
        <p>© 2024 Всі права захищені.</p>
    </footer>
</body>
</html>';
?>
