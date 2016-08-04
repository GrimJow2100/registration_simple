<?php
session_start();#Сесии нужны для работы с переменными на разных страничках


$db = mysql_connect("localhost","fadmin","SU27flanker");
mysql_select_db("mysite-local",$db);
if(isset($_POST['button'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    
}

$query=mysql_query("SELECT * FROM users WHERE login='$login'");
$myrow=mysql_fetch_array($query);

if ($login == $myrow['login']){
    if($password == $myrow['password']){
        $_SESSION['login']=$login;
        echo "Привет, ".$login;
    }else{
        echo "Пароль введен не верно";
    }
}else{
    echo "Логин введен не верно";
}


?>
<meta charset="utf-8">