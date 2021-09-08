
<?php 
include 'Navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styling/Home_styling.css">
    <title>Document</title>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  float:left; 
  margin:2%;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>

<body>
    <h2>Lagkagehuset</h2>
    <h3></h3>
    <div class="card">
        <img src="https://static.thenounproject.com/png/187803-200.png" style="width:100%">
        <h1>Smør</h1>
        <p class="price">$0.99</p>
        <p>Some text about the products.lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
    </div>  
    <div class="card">
        <img src="https://static.thenounproject.com/png/187803-200.png" style="width:100%">
        <h1>Franskbrød</h1>
        <p class="price">$1.99</p>
        <p>Some text about the products. lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
    </div> 
    <div class="card">
        <img src="https://static.thenounproject.com/png/187803-200.png" style="width:100%">
        <h1>Hindbærsnitte</h1>
        <p class="price">$1.99</p>
        <p>Some text about the products. lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
    </div>
    <div class="card">
        <img src="https://static.thenounproject.com/png/187803-200.png" style="width:100%">
        <h1>Rugbrød</h1>
        <p class="price">$1.49</p>
        <p>Some text about the products. lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
    </div>
</body>
</html>
