<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 30/06/16
 * Time: 14:36
 */

    function validaEmail($s){

        $s = strstr($s, '@');
        if(ctype_alpha($s[1]) && $s[0] === "@"){

            $s = strstr($s, '.');
            if(ctype_alpha($s[1]) && $s[0] === "."){
                echo "E-mail valido";
            }
            elseif ($s[0] != "."){
                echo "Falta o ponto.";
            }
            else{
                echo "Falta caracteres apos o ponto.";
            }
        }
        else{
            echo "Falta caracteres apos o @.";
        }
    }


    $mail = $_POST['mail'];

    validaEmail($mail);

