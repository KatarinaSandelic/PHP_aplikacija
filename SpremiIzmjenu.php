<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPREMI IZMJENU</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            
        }

        .content {
            text-align: center;
            max-width: 500px;
    
        }

        h1 {
            color: #333;
            margin-bottom: 10px; /* Reduced margin */
        }

        p {
            font-size: 18px;
            color: rgb(0, 0, 0);
            margin-bottom: 15px; /* Spacing between paragraphs */
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(0, 49, 128);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px; /* Added margin-top for space between paragraphs and link */
        }

        a:hover {
            background-color: rgb(31, 92, 192);
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Izmjena podataka:</h1>

        <?php 
        $id = $_POST["id"];
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $adresa = $_POST["adresa"];
        $mobitel = $_POST["mobitel"];
        $mail = $_POST["mail"];
        $webstr = $_POST["webstr"];

        $veza = otvoriVezu();

        $sql = "UPDATE kontakti SET Ime='$ime', Prezime='$prezime', Adresa='$adresa', Mobitel='$mobitel', Mail='$mail', Webstr='$webstr' WHERE Id=$id";

        if($veza->query($sql) === TRUE){
            echo "<p>Podaci su uspješno spremljeni.</p>";
        } else {
            echo "<p>Greška: " . $veza->error . "</p>";
        }

        $veza->close();
        ?>

        <a href="PregledKontakta.php">Povratak na početnu stranicu</a>
    </div>

</body>
</html>
