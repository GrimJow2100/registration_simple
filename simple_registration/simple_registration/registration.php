<meta charset="utf-8">
<?php
$db = mysql_connect("localhost","fadmin","SU27flanker");
mysql_select_db("mysite-local",$db);
if(isset($_POST['button'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $rpassword=$_POST['r-password'];
}
if($password == $rpassword){
    echo "Учетная запись создана";
    mysql_query("INSERT INTO users (login,password) VALUE ('$login','$password')");
}else{
    echo "Пароли не совпадают";
}




?>