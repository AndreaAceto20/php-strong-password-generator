<?php 

require './function.php';

if($password != ""){

    header( "Location: ./password.php");

    session_start();
    $_SESSION['password'] = $password;
    echo $password;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    

    <form action="">
    <label for="length">Inserire la lunghezza della password che si vuole generare</label>
    <input type="number" name="length" id="length" min = 5 max = 50 value = 5>
    <div>
       
        <input type="checkbox" name="letters" id="letters"><label for="letters">Lettere</label>
        <input type="checkbox" name="numbers" id="numbers"><label for="numbers">Numeri</label>
        <input type="checkbox" name="specials" id="specials"><label for="specials">Speciali</label>
   
    </div>
    <button type="submit">Genera</button>
    
    </form>
</body>
</html>