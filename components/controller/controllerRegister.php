<?php


?>


<?php
function patterRecognition($passwordValue){
    $pattern='/^([A-Za-z0-9]{7,12})$/';
    return preg_match($pattern, $passwordValue); 
} 

function emailValidation($emailInput){
    return filter_var($emailInput, FILTER_VALIDATE_EMAIL);
}