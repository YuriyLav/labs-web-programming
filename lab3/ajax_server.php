<?php
$login = strip_tags ($_REQUEST["login"]);
$pass = strip_tags ($_REQUEST["password"]);
if( $login == "Iam" && $pass == 12345 ) {
echo "Успешная авторизация";
} else {
echo "Ошибка авторизации";
}
?>