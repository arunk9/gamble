<?php

namespace App\Repositories;

class DistanceRepository implements DistanceRepositoryInterface
{
    const GAM_LAT = "53.3340285";
    const GAM_LONG = "-6.2535495";

    /**
     *
     * @param float $latitudeFrom
     * @param float $longitudeFrom

     * @return float [km]
     */
    public function getDistance($latitudeFrom, $longitudeFrom)
    {
        $rad = M_PI / 180;

        //Calculate distance from latitude and longitude
        $theta = $longitudeFrom - self::GAM_LONG;
        $dist = sin($latitudeFrom * $rad)
            * sin(self::GAM_LAT * $rad) +  cos($latitudeFrom * $rad)
            * cos(self::GAM_LAT * $rad) * cos($theta * $rad);

        return acos($dist) / $rad * 60 *  1.853;
    }
}
