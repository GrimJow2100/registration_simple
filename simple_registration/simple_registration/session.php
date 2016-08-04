<?php
session_start();
if(isset($_SESSION['login'])){
  echo "Это видят только авторезирование пользователи";  
}else

echo "Вы не аторизированы";


?>
<meta charset="utf-8">