<?php 
include 'Navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styling/Login_styling.css">
    <title>Document</title>
</head>
<body>
    <div class="loginDiv" >
        <div class="container">
            <label>Brugernavn: </label>
            <input type="text" placeholder="Indsæt Brugernavn  " name="username" required="required"/>
            <br /> <br />
            <label>Kodeord: </label>
            <input type="password" placeholder="Indsæt Kodeord" name="password" required="required" />
            <br /><br />
            <button type="submit" onclick="location.href='Home.php'" >Log ind</button>  
        </div>
    </div>
</body>
</html>
<style>
    .loginDiv {
    position:fixed; 
    top:50%; 
    left:50%; 
    -webkit-transform: translate(-50%, -50%); 
    transform: translate(-50%, -50%);
}
</style>