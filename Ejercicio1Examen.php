<?php 
    $modo = 3;
    switch ($modo) {
        case 1: // COMPARAR CADENAS $MOD0 = 1 
            $palabra1 ="";
            $palabra2 ="";
            if (substr($palabra) === substr($palabra2)) {
            echo 'Son iguales'; 
                } else {
                 echo 'Las palabras no son iguales'; 
             }
            break;
        case 2: // cOMPARAR CADENAS CASE SENSITIVE 
        if (strcasecmp($palabra1, $palabra2) === 0) {
                echo "";
        } else {
                echo "";
        }
            break;
        case 3: // comparacion natural strnatcmp(string $str1, string $str2): int
            $str1 = "red";
            $str2 = "redent";
            $test=strncasecmp($str1, $str2 , 3); 
            if ($str1==$str2){
            echo "$test"; 
            }else{ 
            echo "$test" ;
            }
            break;
        case 4: // strncasecmp(string $str1, string $str2, int $len): int
            break;
        default:
    }
    








?>