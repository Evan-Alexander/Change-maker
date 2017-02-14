<?php

    require_once "src/Change.php";

    class ChangeTest extends PHPUnit_Framework_TestCase
    {
        function test_quarter()
        {
            //Arrange
            $new_change = new Change;
            $input = .50;

            //Act
            $result = $new_change->changeMaker($input);

            //Assert
            $this->assertEquals("2 quarters and 0 dimes", $result);
        }

        function test_quarteranddime()
        {
            //Arrange
            $new_change = new Change;
            $input = .45;

            //Act
            $result = $new_change->changeMaker($input);

            //Assert
            $this->assertEquals("1 quarters and 2 dimes", $result);
        }
    }





?>
