<?php

    class Change
    {

        function changeMaker($input)
        {
            $quarter = .25;
            $dime = .10;
            $nickel = .05;
            $penny = .01;

            $number_of_quarters = floor($input / $quarter);
            $number_of_dimes = floor(($input - ($number_of_quarters * $quarter)) / $dime);
            $number_of_nickels = floor(($input - ($number_of_quarters * $quarter + $number_of_dimes * $dime)) / $nickel);
            $number_of_pennies = floor(($input - ($number_of_quarters * $quarter + $number_of_dimes * $dime + $number_of_nickels * $nickel)) / $penny);
            return "" . $number_of_quarters . " quarters" . " and " . $number_of_dimes . " dimes" . " and " . $number_of_nickels . " nickels" . " and " . $number_of_pennies . " pennies";
        }
    }

?>
