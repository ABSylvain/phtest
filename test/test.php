<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="prenom[]" value="adriana" />Adriana<br>
        <input type="checkbox" name="prenom[]" value="alessandra" />Alessandra<br>
        <input type="checkbox" name="prenom[]" value="candice" />Candice<br>
        <input type="checkbox" name="prenom[]" value="lili" />Lili<br>
        <input type="submit" value="Envoyer" />
    </form>
    <?php

    foreach($_POST['prenom'] as $valeur)
{
   echo "La checkbox $valeur a été cochée<br>";
}
?>
</body>

</html>