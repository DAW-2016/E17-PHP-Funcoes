<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 24/06/16
 * Time: 16:38
 */

    //Em inglês
//    $mydate=getdate(date("U"));
//
//    echo "$mydate[weekday],  $mydate[mday] de $mydate[month] de $mydate[year]";

    //Em portugues
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    echo strftime('%A, %d de %B de %Y', strtotime('today'));
