<?php

namespace App\Repositories;

interface DistanceRepositoryInterface
{
    public function getDistance($lat, $long);
}
