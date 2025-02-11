<?php

include("OtvoriVezu.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">

    <title> pr kon</title>
    <style>
      
        </style>
</head>
<body>
    <div class="kontenjer">

    <h1>pregled kontakta:</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ime</th>
                <th>prezime</th>
                <th>adresa</th>
                <th>mobitel</th>
                <th>mail</th>
                <th>webstr</th>
                <th>brisanje</th>
                <th>uredi</th>
            
            </tr>
        </thead>
        <tbody></tbody>
  



<?php
//spajanje na bazu
$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti";

$result = $veza->query($sql);

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

    $id = $row["Id"];
    $ime =$row["Ime"];
    $prezime =$row["Prezime"];
    $adresa =$row["Adresa"];
    $mobitel =$row["Mobitel"];
    $mail =$row["Mail"];
    $webstr =$row["Webstr"];

echo"<tr>";
echo"<td>$ime</td>";
echo"<td>$prezime</td>";
echo"<td>$adresa</td>";
echo"<td>$mobitel</td>";
echo"<td>$mail</td>";
echo"<td>$webstr</td>";
echo"<td>  <a href='ObrisiKontakt.php?id=$id'>Obriši</a>  </td>";
echo"<td> <a href='UrediKontakt.php?id=$id'>Uredi</a></td>";
echo"</tr>";

}





}


?>
  </table>
</div>
</body>
</html>