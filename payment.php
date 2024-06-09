<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата підписки ТБ-онлайн</title>
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
        .payment {
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
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            display: block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            width: calc(100% - 22px);
            margin-left: auto;
            margin-right: auto;
        }
        button:hover {
            background-color: #555;
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
	
        <h1>Оплата</h1>
    </header>
    <main>
        <section class="payment">
            <h2>Виберіть варіант підписки</h2>
            <select name="subscription" id="subscription">
                <option value="100">100 грн на місяць</option>
                <option value="200">200 грн на 2 місяці</option>
                <option value="300">300 грн на 3 місяці</option>
                <option value="500">500 грн на 6 місяців</option>
                <option value="900">900 грн на 1 рік</option>
            </select><br>
            <button onclick="redirectToCheckout()">Оплатити</button>
        </section>
    </main>
    <footer>
        <p>© 2024 Всі права захищені.</p>
    </footer>
    <script>
        function redirectToCheckout() {
            window.location.href = "checkout.php";
        }
    </script>
</body>
</html>';
?>
