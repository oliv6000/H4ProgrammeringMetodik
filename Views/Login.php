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
        <form id="loginForm">
            <div class="container">
                <label>Brugernavn: </label>
                <input type="text" placeholder="Indsæt Brugernavn  " name="username" required="required"/>
                <br /> <br />
                <label>Kodeord: </label>
                <input type="password" placeholder="Indsæt Kodeord" name="password" required="required" />
                <br /><br />
                <button type="submit" onclick="loginClicked" onserverClick="loginClicked">Log ind</button>  
            </div>
        </form>
    </div>
</body>
</html>