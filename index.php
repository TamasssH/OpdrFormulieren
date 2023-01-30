<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht - vertaler</title>
</head>
<body>

    <form method="post" action="">

    Naam:<input type="text" name="naam" placeholder="Uw naam" required /><br />

    Land:<select name="land"> 
            <option value="NL">Nederland</option> 
            <option value="DE">Duitsland</option> 
            <option value="EN">Engeland</option>
         </select>

        <br />
        <input type="submit" name="submit" value="gegevens versturen" />
    </form>

<?php
    if(isset($_POST["submit"])){
        $naam = $_POST["naam"];
        $land = $_POST["land"];
    if($land=="NL"){
        echo "Goedemorgen ".$naam;
 }
    elseif($land=="DE"){
        echo "Guten Morgen ".$naam;
 }
    elseif($land=="EN"){
        echo "Good Morning ".$naam;
      }
 }
?>

</body>

</html>