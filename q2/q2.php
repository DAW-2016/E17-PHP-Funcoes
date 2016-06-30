<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 24/06/16
 * Time: 16:29
 */
    $nu = $_POST['N'];


    function fibo($numero){

        if($numero==1 || $numero==2)
            return 1;
        else
            return fibo($numero - 1) + fibo($numero - 2);
    }

    if($nu > 0)
        echo fibo($nu);
    else
        echo "Número menor que 0";