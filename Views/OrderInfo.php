<?php
include 'Navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styling/Orders_styling.css">
    <title>Bestillinger</title>
</head>
<script>
    function Nope() {
        alert("W.I.P");
    }    
</script>
<body>

<h2>Bestillinger</h2>
<table style="width:100%">
    <?php 
        $i = 0;
        while ($i != 4) {

            echo '
            <tr onclick="Nope()">
                <th>
                    ID
                    <p>25</p>
                </th>
                <th>
                    Dato
                    <p>20/4/1889</p>
                </th>
                <th>
                    Varer:
                    <p>Smør, Ost(uden mælk), Æg</p>
                </th>
                <th>
                    Pris i alt
                    <p>43 kr.</p>
                </th>
            </tr>
            ';
            $i++;
        }
    ?>
</table>
</body>
</html>