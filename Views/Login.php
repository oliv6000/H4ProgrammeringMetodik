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
            <label style="font-weight:bold;font-size:28px">Brugernavn</label>
            <br>
            <input type="text" placeholder="Indsæt Brugernavn" id="inputUsername" name="username" required="required"/>
            <br /> <br />
            <label style="font-weight:bold;font-size:28px">Kodeord</label>
            <br>
            <input type="password" placeholder="Indsæt Kodeord" name="password" required="required" />
            <br /><br />
            <button type="submit" onclick="location.href='Home.php'" >Log ind</button>  
            <button onclick="location.href='New_user.php'" > Opret bruger </button>
        </div>
    </div>
</body>
</html>

