<?php
    require_once __DIR__ . '/../src/Clock.php';

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_hourHandAngle_one()
        {
            // arrange
            $test_Clock = new Clock;
            $input_hour = 1;

            // act
            $result = $test_Clock->hourHandAngle($input_hour);

            // assert
            $this->assertEquals(30, $result);
        }
    }
?>
