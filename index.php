<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("animal.php");
    require("Frog.php");
    require("Ape.php");

    $sheep = new Animal("shaun");

    echo $sheep->name; // "shaun"
    echo "<br>";
    echo $sheep->legs; // 2
    echo "<br>";
    echo $sheep->cold_blooded; // false
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"
    ?>

</body>

</html>