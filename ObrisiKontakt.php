<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisanje kontakata</title>
    <style>
        /* Centering content on the page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:rgb(255, 255, 255);
        }

        .content {
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px; /* Adding space between title and message */
        }

        /* Styling the paragraph with the result message */
        p {
            font-size: 18px;
            color: rgb(0, 0, 0);
            margin-bottom: 20px; /* Adding space between message and link */
        }

        
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(0, 49, 128);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        a:hover {
            background-color:rgb(31, 92, 192);
        }
    </style>
</head>
<body>
    
<div class="content">
    <h1>Brisanje kontakata</h1>

    <?php

    if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
        $id = $_GET["id"];

     
        $veza = OtvoriVezu();

       
        $sql = "DELETE FROM kontakti WHERE Id = ?";

        if ($stmt = $veza->prepare($sql)) {
 
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                echo "<p>Kontakt uspješno izbrisan.</p>";
            } else {
                echo "<p>Greška: " . $stmt->error . "</p>";
            }

            $stmt->close();
        } else {
            echo "<p>Greška pri pripremi upita.</p>";
        }

        $veza->close();
    } else {
        echo "<p>Neispravan ID ili ID nije postavljen.</p>";
    }

    ?>
    <a href="PregledKontakta.php">Povratak na početnu stranicu</a>
</div>

</body>
</html>
