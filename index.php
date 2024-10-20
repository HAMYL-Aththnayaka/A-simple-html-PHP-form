<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world </h1>
    <form action="index.php" method="post">
    <label>Username</label>
    <input type ="text" name="username"><br>
    <label for="password">Password</label>
    <input type="password" name="password"><br>
    <input type="button" name ="login" value="login">

</form>
</body>
</html>
<?php
    echo "hi  Php is in code ";

    //isset() = Returns TRUE of variable is decleared 
    //empty() = Returns TRUE if a variable is not decleared

/*foreach($_POST as $key => $value){
    echo "{$key}={$value}<br>";
}*/

if(isset($_POST["login"])){
$username =$_POST["username"];
$password =$_POST["username"];

if(empty($username)){
    echo"Hello username s missing";
}

else{
    echo"hello{$username}";
}
}

    ?>