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
    }
?>
