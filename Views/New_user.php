<?php 
include 'Navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styling/New_user_styling.css">
    <title>Document</title>
</head>
<body>
    <form>
        <div class="UserInputContainer">
            <h1 class="Header">Opret bruger</h1>
            <input class="UserInput" id="Uname" placeholder="Brugernavn" title="Brugernavn"/>
            <br>
            <input class="UserInput" id="Pword" placeholder="Adgangskode" title="Adgangskode"/>
            <br>
            <input class="UserInput" id="Name" placeholder="Navn" title="Navn"/>
            <br>
            <input class="UserInput" id="Email" placeholder="Email" title="Email"/>
            <br>
            <input class="UserInput" id="Pnumber" placeholder="Telefonnummer" title="Telefonnummer"/>
            <br>
            <button class="CreateButton">Opret</button>
        </div>
    </form>
    </body>
</html>