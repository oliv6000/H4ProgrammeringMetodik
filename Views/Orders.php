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
<body>

<h2>Bestillinger</h2>
<table style="width:100%">
    <?php 
        $i = 0;
        while ($i != 4) {

            echo '
            <tr>
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
            <tr>
            <th>
                ID
                <p>504</p>
            </th>
            <th>
                Dato
                <p>17/8/1987
            </th>
            <th>
                Varer:
                <p>Mælk, Ost(uden mælk), Æg</p>
            </th>
            <th>
                Pris i alt
                <p>923 kr.</p>
            </th>
            </tr>
            <tr>
            <th>
                ID
                <p>82</p>
            </th>
            <th>
                Dato
                <p>12/3/1738
            </th>
            <th>
                Varer:
                <p>Smør, Ost(ekstra mælk), Æg</p>
            </th>
            <th>
                Pris i alt
                <p>41 kr.</p>
            </th>
            </tr>
            <tr>
            <th>
                ID
                <p>17</p>
            </th>
            <th>
                Dato
                <p>12/9/2021
            </th>
            <th>
                Varer:
                <p>Smør, ost(uden mælk), Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Æg, Løg, Æg, Æg</p>
            </th>
            <th>
                Pris i alt
                <p>214 kr.</p>
            </th>
            </tr>
            <tr>
            <th>
                ID
                <p>38</p>
            </th>
            <th>
                Dato
                <p>1/1/2022
            </th>
            <th>
                Varer:
                <p>Mælk++ X 14</p>
            </th>
            <th>
                Pris i alt
                <p>872 kr.</p>
            </th>
            </tr>
            ';
            $i++;
        }
    ?>
</table>
</body>
</html>