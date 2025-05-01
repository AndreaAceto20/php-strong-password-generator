<?php     

    $letters = "ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvxyz";
    $numbers = "0123456789";
    $simbols = "!?#*^£$%&()";
    $all = '';

    $password = "";


    if(isset($_GET['length'])){
   if(isset($_GET['letters']) && $_GET['letters'] == 'on'){

    $all .= $letters;

    
   } if(isset($_GET['numbers']) && $_GET['numbers'] == 'on'){

    $all .= $numbers;

    
   } if(isset($_GET['specials']) && $_GET['specials'] == 'on'){

    $all .= $simbols;

    
   }
   for($i = 0; $i < $_GET['length']; $i++){
    
    $random_numb = rand(0, strlen($all) - 1);
    
    $random_char = substr($all, $random_numb, 1);

    $password .= $random_char;
    }}

    
    ?>