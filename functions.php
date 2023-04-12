<?php


function creaPassword($length)
{


    $password = '';


    $caratteri_lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $caratteri_upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $caratteri_numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $caratteri_specials = ["!", "£", "$", "%", "&", "/", "@", "#", "*", "?"];



    $caratteri_all = array_merge($caratteri_lower, $caratteri_numbers, $caratteri_specials, $caratteri_upper);


    for ($i = 1; $i <= $length; $i++) {
        $random = rand(0, count($caratteri_all) - 1);
        $password .= $caratteri_all[$random];
    }


    return $password;
}

?>