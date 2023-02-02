<?php

    function check(int $age) : void {
        if ($age >= 18) {
            $text = "You are eligible";
        } else {
            $text = "You are not eligible";
        }

        echo $text;
    }

    $myAge = 16;
    check($myAge)
?>