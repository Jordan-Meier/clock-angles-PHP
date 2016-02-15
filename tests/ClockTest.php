<?php
    require_once __DIR__ . '/../src/Clock.php';

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_hourHandAngle_all()
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
        function test_minuteHandAngle_all()
        {
            // arrange
            $test_Clock = new Clock;
            $input_minute = 10;
            $input_minute2 = 30;
            $input_minute3 = 0;

            // act
            $result = $test_Clock->minuteHandAngle($input_minute);
            $result2 = $test_Clock->minuteHandAngle($input_minute2);
            $result3 = $test_Clock->minuteHandAngle($input_minute3);

            // assert
            $this->assertEquals(60, $result);
            $this->assertEquals(180, $result2);
            $this->assertEquals(0, $result3);
        }
    }
?>
