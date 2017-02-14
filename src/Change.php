<?php

    class Change
    {

        function changeMaker($input)
        {
            $quarter = .25;
            $dime = .10;
            $nickel = .05;
            $penny = .01;

            $number_of_quarters = ("" . (float) $input / $quarter) . " quarters";

            return $number_of_quarters;
        }
    }

?>
