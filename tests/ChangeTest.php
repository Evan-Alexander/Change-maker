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
            $this->assertEquals("2 quarters", $result);
        }
    }





?>
