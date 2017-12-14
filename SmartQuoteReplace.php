<?php

function SmartQuoteReplace($inputString){
    $DumbQuote="e2809d"; //this is the hexadecimal representation of the apple "smart" quote
    $HexString=bin2hex($inputString);
    $GoodString=str_replace($DumbQuote,"22",$HexString); //22 is the hexadecimal representation of a regular double qoute
    $ReplacedString=hex2bin($GoodString);

    return $ReplacedString;
}

?>
