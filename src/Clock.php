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
    }
?>
