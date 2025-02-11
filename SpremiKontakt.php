
<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spremi kontakt</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: rgb(255, 255, 255);
        }

        .content {
            text-align: center;
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
        <h1>Podaci:</h1>

        <?php
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $adresa = $_POST["adresa"];
        $mobitel = $_POST["mobitel"];
        $mail = $_POST["mail"];
        $webstr = $_POST["webstr"];

        echo "<p>$ime</p>";
        echo "<p>$prezime</p>";
        echo "<p>$adresa</p>";
        echo "<p>$mobitel</p>";
        echo "<p>$mail</p>";
        echo "<p>$webstr</p>";

        // spremanje u bazu podataka
        $veza = OtvoriVezu();

        $sql = "INSERT INTO kontakti (Ime, Prezime, Adresa, Mobitel, Mail, Webstr) 
                VALUES('$ime', '$prezime', '$adresa', '$mobitel', '$mail', '$webstr')";

        if($veza->query($sql) === TRUE){
            echo "<p>zapis je uspjesno spremljen </p>";
        } else {
            echo "greska: ". $veza->error;
        }
        $veza->close();
        ?>

        <!-- Link to go back -->
        <a href="PregledKontakta.php">Povratak na početnu stranicu</a>
    </div>
</body>
</html>
