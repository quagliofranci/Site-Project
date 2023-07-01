<?php
    $today = date('l, F j, Y');
    $timestamp = date('g:i A');

    if(!isset($_COOKIE['LAST_VISIT'])) {
        $lasttime = "";
    } else {
        $lasttime = $_COOKIE['LAST_VISIT'];
    }

    $visita_attuale = $today . " alle " . $timestamp;

    setcookie ("LAST_VISIT", $visita_attuale, time() + 3600*24*30);

    if(!isset($_COOKIE['VISIT_NUMBER'])) {
        $contatoreaccessi = 0;
    } else {
        $contatoreaccessi = $_COOKIE['VISIT_NUMBER'];
    }

    setcookie ("VISIT_NUMBER", ++$contatoreaccessi, time() + 3600*24*30);
?>