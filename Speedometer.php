<?php

class Speedometer
{
    public const ONE_MILES_TO_KM = 0.621371;
    public const ONE_KM_TO_MILES = 1.60934;
    public static function convertKmToMiles($km)

    {
        $miles = round($km * self::ONE_KM_TO_MILES, 2, PHP_ROUND_HALF_DOWN);
        return $km . "Km as Miles " . $miles;
    }

    public static function convertMilesToKm($miles)

    {
        $km = round($miles * self::ONE_MILES_TO_KM, 2, PHP_ROUND_HALF_DOWN);
        return $miles . " Miles as Km : " . $km;
    }
}
