<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 30/06/16
 * Time: 15:08
 */

    function soNumero($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    function tudoIgual($str){

        if($str[0] ===  $str[1] && $str[1] ===  $str[2] && $str[2] ===  $str[3] && $str[3] ===  $str[4] && $str[4] ===  $str[5] && $str[5] ===  $str[6] && $str[6] ===  $str[7] && $str[7] ===  $str[8] && $str[8] ===  $str[9] && $str[9] ===  $str[10]){
            return false;
        }

        return true;
    }

    function validaCpf($s){

        $s = soNumero($s);

        if(!tudoIgual($s)){
            echo "Invalido";
            return;
        }

        if(strlen($s) != 11){

            echo "Falta algum digito";
            return;
        }

        $soma = 0;
        $j = 0;


        for($i = 10; $i >= 2; --$i){

            $soma += $s[$j] * $i;
            $j++;
        }

        

        if(($soma*10)%11 === 10 && $s[9] == 0){

            $digito1 = true;
        }
        elseif (($soma*10)%11 == $s[9]){

            $digito1 = true;
        }
        else{
            $digito1 = false;
        }

        $soma2 = 0;
        $j = 0;


        for($i = 11; $i >= 2; --$i){

            $soma2 += $s[$j] * $i;
            $j++;
        }


        if(($soma2*10)%11 === 10 && $s[10] == 0){

            $digito2 = true;
        }
        elseif (($soma2*10)%11 == $s[10]){

            $digito2 = true;
        }
        else{
            $digito2 = false;
        }

        if($digito1 === true && $digito1 === true){

            echo "Valido";
        }
        else{
            echo "Invalido";
        }

    }

    $cpf = $_POST['cpf'];

    validaCpf($cpf);




