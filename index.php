<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikacija</title>
    <style>
        h1 {
            color: rgb(0, 49, 128);
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .body1 {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(32, 50, 79);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .kontenjer1 {
            max-width: 420px;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgb(0, 0, 0);
            display: flex;
            flex-direction: column;
            gap: 15px;    }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            color: rgb(0, 0, 0);
        }

        input[type="text"],
        textarea {
            padding: 10px;
            margin-bottom: 10px; /* Added bottom margin for uniformity */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 95%; 
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 10px;
            background-color: rgb(0, 49, 128);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%; /* Makes the button take full width */
        }

        button:hover {
            background-color: rgb(0, 49, 128);
        }

        .checkbox-group {
            margin: 10px 0;
        }
    </style>
</head>
<body class="body1">
    <div class="kontenjer1">
        <h1>Kontakti</h1>
        <form action="SpremiKontakt.php" method="POST">
            
            <label for="ime">Ime:</label>
            <input type="text" id="ime" name="ime">
            
            <label for="prezime">Prezime:</label>
            <input type="text" id="prezime" name="prezime">
            
            <label for="adresa">Adresa:</label>
            <textarea rows="4" name="adresa"></textarea>
            
            <label for="mobitel">Mobitel:</label>
            <input type="text" id="mobitel" name="mobitel">
            
            <label for="mail">Mail:</label>
            <input type="text" id="mail" name="mail">
            
            <label for="webstr">Webstr:</label>
            <input type="text" id="webstr" name="webstr">
            
            <button type="submit">Pošaljite</button>
        </form>
    </div>
</body>
</html>

