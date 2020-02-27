<?php

if(isset($_POST['submit']))
{

$username = $_POST['username'];
$password =  $_POST['password'];

if(!empty($username) && !empty($password))
{
    if($username == "semyonadmin" && $password == "12345678")
    {
        
    }

}


}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель Администратора</title>
</head>
<body style="text-align:center;">
<form method="post" id="admin-login-form">
<input id="username" name="username" placeholder="Admin Username"><br><br>
<input id="password" name="password" placeholder="Password"><br><br>
<button type="submit" id="submit" name="submit">Login</button>
</form>

</body>
</html>