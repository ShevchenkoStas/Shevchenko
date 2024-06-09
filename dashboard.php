<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабінет користувача ТБ-онлайн</title>
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
        .dashboard {
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
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            margin-right: 10px;
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
    </style>
</head>
<body>
    <header>
        <h1>Вітаємо, <?php echo htmlspecialchars($user_name); ?>!</h1>
    </header>
    <main>
        <section class="dashboard">
            <h2>Мій кабінет</h2>
            <p>Email: <?php echo htmlspecialchars($user_email); ?></p>
            <p>Номер телефону: <?php echo htmlspecialchars($user_phone); ?></p>
            <a href="update_profile.php">Оновити профіль</a>
            <a href="payment.php">Поповнити рахунок</a>
        </section>
    </main>
    <footer>
        <p>© 2024 Всі права захищені.</p>
    </footer>
</body>
</html>
