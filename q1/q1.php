<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 30/06/16
 * Time: 15:45
 */

    function caixaAltaGenerico($str){

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

        date_default_timezone_set('America/Sao_Paulo');
        return mb_strtoupper($str);
    }


    $palavra = $_POST['palavra'];

    echo caixaAltaGenerico($palavra);