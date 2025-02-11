<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uredi kontakt</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color:rgb(32, 50, 79);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .kontenjer {
            width: 80%;
            max-width: 420px;
            padding: 25px;
            background-color:rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: rgb(0, 49, 128);
            text-align: center;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: rgb(0, 49, 128);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: rgb(31, 92, 192);
        }

        /* Additional styling for alignment and spacing */
        form {
            width: 100%;
        }
    </style>
</head>
<body>

<?php

$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti WHERE id=" . $_GET["id"];
$result = $veza->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $id = $row["Id"];
    $ime = $row["Ime"];
    $prezime = $row["Prezime"];
    $adresa = $row["Adresa"];
    $mobitel = $row["Mobitel"];
    $mail = $row["Mail"];
    $webstr = $row["Webstr"];
} else {
    echo "Nema podataka u bazi.";
}

?>



<form class="form1" action="SpremiIzmjenu.php" method="POST">

    <div class="kontenjer">
<h1>uredi podatke za: <?php echo $ime . " " . $prezime ?></h1>
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" value="<?php echo $ime ?>">

        <label for="prezime">Prezime:</label>
        <input type="text" id="prezime" name="prezime" value="<?php echo $prezime ?>">

        <label for="adresa">Adresa:</label>
        <input type="text" id="adresa" name="adresa" value="<?php echo $adresa ?>">

        <label for="mobitel">Mobitel:</label>
        <input type="text" id="mobitel" name="mobitel" value="<?php echo $mobitel ?>">

        <label for="mail">mail:</label>
        <input type="text" id="mail" name="mail" value="<?php echo $mail ?>">

        <label for="webstr">webstr:</label>
        <input type="text" id="webstr" name="webstr" value="<?php echo $webstr ?>">

        <input type="hidden" name="id" value="<?php echo $id ?>">
<br>
        <button type="submit">Spremi izmjene</button>
    </div>

</form>

</body>
</html>
