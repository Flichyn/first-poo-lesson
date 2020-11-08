<?php


class Speedometer
{
    const oneKilometer = 1.609;

    const oneMile = 0.621;

    public static function convertMilesToKm(float $miles)
    {
        return $miles * self::oneKilometer;
    }

    public static function convertKmToMiles(float $kilometers)
    {
        return $kilometers * self::oneMile;
    }
}