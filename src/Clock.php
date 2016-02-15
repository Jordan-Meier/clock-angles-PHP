<?php
    class Clock
    {
        function hourHandAngle($hour)
        {
            if ($hour >= 12) {
                $hour -= 12;
            }
            return ($hour/12)*360;
        }
        function minuteHandAngle($minutes)
        {
            return ($minutes/60)*360;
        }
        function angleBetweenHands($time)
        {
            $time_array = explode(':', $time);
            $result = abs($this->minuteHandAngle($time_array[1]) - $this->hourHandAngle($time_array[0]+$time_array[1]/60));
            return $result;
        }
    }
?>
