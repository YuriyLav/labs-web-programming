<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  if(mb_strlen($login)<5 || mb_strlen($login)>90){
    echo "Недопустимая длина логина";
    exit();
  }
  else if(mb_strlen($pass)<2 || mb_strlen($pass)>6){
    echo "Недопустимая длина пароля (от 2 до 6 символов)";
    exit();
  }

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
$user  = $result->fetch_assoc();
if(count($user) != 0){
  echo "Такой пользователь уже зарегистрирован!";
  exit();
}

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
  $mysql->query("INSERT INTO `users` (`login`, `pass`) VALUES('$login', '$pass')");

  $mysql->close();

  header('Location: /');
?>
