<?php
if(isset($_POST["submit"])){
    $naam = $_POST["naam"];
    $land = $_POST["Lands"];
}
?>


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

    Land:<select name="Lands" >
            <option value="" <?php if($land == "") {echo "selected";} ?> >Maak uw Keuze: </option> 
            <option value="Nl" <?php if($land == "Nl") {echo "selected";} ?> >Nederland</option> 
            <option value="De" <?php if($land == "De") {echo "selected";} ?> >Duitsland</option> 
            <option value="En" <?php if($land == "En") {echo "selected";} ?> >Engeland</option>
            <option value="Fr" <?php if($land == "Fr") {echo "selected";} ?> >Frans</option>
            <option value="Es" <?php if($land == "Es") {echo "selected";} ?> >Spaans</option>
            <option value="It"<?php if($land == "It") {echo "selected";} ?> >Italiaans</option>
         </select>

        <br />
        <input type="submit" name="submit" value="gegevens versturen" />
    </form>

<?php
    if(isset($_POST["submit"])){
            switch ($land) {
                case "Nl":
                    echo "Goedenmorgen " . $naam;
                    break;
                case "De":
                    echo "Guten morgen " . $naam;
                    break;
                case "En":
                    echo "Good morning " . $naam;
                    break;
                case "Fr":
                    echo "Bonjour " . $naam;
                    break;
                case "Es":
                    echo "Buenos días " . $naam;
                    break;
                case "It":
                    echo "Buongiorno " . $naam;
                    break;
                default:
                    echo "U heeft geen land geselecteerd, weet u zeker dat u het wilt versturen?";
                }
            }
?>

</body>

</html>