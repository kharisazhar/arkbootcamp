<?php
    function handshake($number){
        for ($x = $number; $x >=1; $x--) {
            $result += $x-1;
        }

        return $result;
    }
    echo handshake(6);
?>