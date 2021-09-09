<?php 
include 'Navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Basket_styling.css">
    <title>Document</title>
    <style>
        .remove-button {
            height: 20px;
            width: 20px;
        }
    </style>
    <script>
        function nope() {
            alert("Not Enough Minerals");
        }
    </script>

</head>
<body>
        <div style="text-align:center; margin: 20px;">
            <h2>kurv</h2>
        </div>
    <div class="grid-container">

        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDieP1rDodg2MjrKjKDSDGt_xjdqwq9G5QXg&usqp=CAU" alt="Placeholder image">
            <h3 class="product-name">Vare 1</h3>
            <input class="amount-input-field" type="number" name="Amount" value="1" />
            <div class="total">
                <p>total: 100,-</p>
                <img class="remove-button" src="https://icon-library.com/images/delete-icon-png-16x16/delete-icon-png-16x16-4.jpg" onclick="nope()"/>
            </div>
        </div>
        
        <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDieP1rDodg2MjrKjKDSDGt_xjdqwq9G5QXg&usqp=CAU" alt="Placeholder image">
            <h3 class="product-name">Vare 2</h3>
            <input class="amount-input-field" type="number" name="Amount" value="2" />
            <div class="total">
                <p>total: 200,-</p>
                <img class="remove-button" src="https://icon-library.com/images/delete-icon-png-16x16/delete-icon-png-16x16-4.jpg" onclick="nope()"/>
            </div>
        </div>

        <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDieP1rDodg2MjrKjKDSDGt_xjdqwq9G5QXg&usqp=CAU" alt="Placeholder image">
            <h3 class="product-name">Vare 3</h3>
            <input class="amount-input-field" type="number" name="Amount" value="3" />
            <div class="total">
                <p>total: 300,-</p>
                <img class="remove-button" src="https://icon-library.com/images/delete-icon-png-16x16/delete-icon-png-16x16-4.jpg" onclick="nope()"/>
            </div>
        </div>

        <div class="product">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDieP1rDodg2MjrKjKDSDGt_xjdqwq9G5QXg&usqp=CAU" alt="Placeholder image">
            <h3 class="product-name">Vare 4</h3>
            <input class="amount-input-field" type="number" name="Amount" value="4" />
            <div class="total">
                <p>total: 400,-</p>
                <img class="remove-button" src="https://icon-library.com/images/delete-icon-png-16x16/delete-icon-png-16x16-4.jpg" onclick="nope()"/>
            </div>
        </div>

    </div>

        <div class="purchase-container">
            <p>I alt: 1000,-</p>
            <Button class="purchase" runat="server" onclick="nope()">Køb</button>
        </div>
    
</body>
</html>