<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Підтверждення сплати ТБ-онлайн</title>
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
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }
        button:hover {
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
        <h1>Оплата підписки</h1>
    </header>
    <main>
        <section class="payment">
            <h2>Введіть дані вашої картки</h2>
            <p>Номер картки:</p>
            <input type="text" id="cardNumber" placeholder="1234 5678 9012 3456"><br>
            <button onclick="processPayment()">Оплатити</button>
        </section>
        <section class="additional-info">
            <h2>Чому варто підписатися?</h2>
            <p>Підписка дозволить вам отримувати доступ до ексклюзивного контенту та послуг за доступною ціною!</p>
        </section>
    </main>
    <footer>
        <p>© 2024 Всі права захищені.</p>
    </footer>
    <script>
        function processPayment() {
            var cardNumber = document.getElementById("cardNumber").value;
            // Відправити дані про картку на сервер для обробки оплати
            // Можна використовувати Ajax або інші техніки для цього
            console.log("Оплачено з карти: " + cardNumber);
            var smsCode = prompt("Введіть код з SMS:");
            if (smsCode !== null) {
                // Тут можна виконати додаткові дії з отриманим кодом з SMS
                alert("Дякуємо за оплату!");
                window.location.href = "checkout.php";
            }
        }
    </script>
</body>
</html>';
?>
