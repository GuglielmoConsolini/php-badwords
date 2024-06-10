<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords form</title>
</head>
<body>
    <h1>Hello PHP World!</h1>
    <h2>Inserisci cosa hai fatto fino adesso nella tua giornata e PHP ti dirà quanti caratteri sono.</h2>

    <!-- FORM CON LA TEXT AREA -->
     <form action="lunghezza.php" method="GET">
        <input type="text" placeholder="Descrivi la tua giornata" name="testo" >
        <button type="submit">Invia</button>
     </form>
    
</body>
</html>