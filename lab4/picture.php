<?php
$array = array('<', '>','script', 'http', 'SELECT', 'UNION', 'UPDATE', 'exe', 'exec', 'INSERT', 'tmp');
  if($_FILES['filename']['size']<=2*1024*1024 and imagesx(imagecreatefromjpeg($_FILES['filename']['name']))<800
  and imagesy(imagecreatefromjpeg($_FILES['filename']['name']))<800){
    $flag = false;
    for($i=0; $i<count($array); $i++){
      if(strpos($_FILES['filename']['name'], $array[$i])===0){
        $flag = true;
        echo "Содержится запрещенно слово или символ!";
      }
    }
    if(!$flag){
      echo 'Файл скопирован на сервер';
      move_uploaded_file($_FILES['filename']['tmp_name'], $_FILES['filename']['name']);
    }
  } else{
    echo 'Файл не скопирован на сервер';
    echo "<br>Проверьте, что размер файла не превышает 2 МБ, а разрешение не превышает 800 пискселей по большей стороне";
  }
?>
