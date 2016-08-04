
<html>
<head>
    <meta charset="utf-8" content="text/html"/>
    <title>Регистрация</title>
    </head>
    <body>
        <form action="registration.php" method="post">
            <p>Логин</p>
            <input type="text" name="login" size="17" required>
            <p>Пароль</p>
            <input type="password" name="password" size="17" required>
            <p>Повторите пароль</p>
            <input type="password" name="r-password" size="17" required>
            <p><input type="submit" value="Регистрация" name="button"></p>
        </form>
        <br><br>
        <p>Авторизация</p>
        <form action="login.php" method="post">
            <p>Ввелите логин</p>
            <input type="text" name="login" size="17" required>
            <p>Ввелите пароль</p>
            <input type="password" name="password" size="17" required>
            
            <p><input type="submit" value="Войти" name="button"></p>
        </form>
        
    </body>
</html>