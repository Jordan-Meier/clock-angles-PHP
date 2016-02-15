<?php
    require_once __DIR__ . '/../src/Clock.php';

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_hourHandAngle_one()
        {
            // arrange
            $test_Clock = new Clock;
            $input_hour = 1;
            $input_hour2 = 12;
            $input_hour3 = 1.5;

            // act
            $result = $test_Clock->hourHandAngle($input_hour);
            $result2 = $test_Clock->hourHandAngle($input_hour2);
            $result3 = $test_Clock->hourHandAngle($input_hour3);

            // assert
            $this->assertEquals(30, $result);
            $this->assertEquals(0, $result2);
            $this->assertEquals(45, $result3);
        }
    }
?>
