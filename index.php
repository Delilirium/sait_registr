<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация и Авторизация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 15px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head> 
<body>

    <div class="form-container">
        <h2>Регистрационная форма</h2>
        <form action="registration.php" method="post">
            <label for="login">Имя:</label>
            <input type="text" placeholder="login" name="login" id="login">

            <label for="email">E-mail:</label>
            <input type="text" placeholder="email" name="email" id="email">

            <label for="pass">Пароль:</label>
            <input type="password" placeholder="password" name="pass" id="pass">

            <label for="repeatpass">Повторите пароль:</label>
            <input type="password" placeholder="repeat password" name="repeatpass" id="repeatpass">

            <button type="submit">Зарегистрироваться</button>
        </form>

        <h2>Авторизация</h2>
        <form action="authorization.php" method="post">
            <label for="auth_login">Имя:</label>
            <input type="text" placeholder="login" name="login" id="auth_login">

            <label for="auth_pass">Пароль:</label>
            <input type="password" placeholder="password" name="pass" id="auth_pass">

            <button type="submit">Войти</button>
        </form>
    </div>

</body>
</html>
