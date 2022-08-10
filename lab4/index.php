<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Форма регистрации</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="container mt-4">
          <?php
            if($_COOKIE['user'] == ''):
          ?>
            <h1>Форма авторизации</h1>
            <form action="validation-form\auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Авторизоваться</button>
            </form>
            <form action="register.php" method="post">
              <p><p>Не зарегистрированы?
                <button class="btn btn-success" type="submit">Регистрация</button>
            </form>
          <?php else:?>
            <p> Успешно! Чтобы открыть функциональную страницу нажмите <a href="/funct_page.php">здесь</a>.</p>
          <?php endif;?>
        </div>
    </body>
</html>
