<?php

namespace App\Http\Controllers;

use App\Repositories\DistanceRepositoryInterface;

/**
 * Controller that has an action to find nearest
 * invites
 *
 * @author akadiveru
 */
class InvitationController extends Controller
{

    /**
     * @param DistanceRepositoryInterface $distanceRepository
     * @return mixed
     */
    public function index(DistanceRepositoryInterface $distanceRepository)
    {
        $file_content = fopen(public_path() . "\affiliates.txt", "r");
        $result = [];
        while(!feof($file_content)) {
            $data = json_decode(fgets($file_content), true);

            if($distanceRepository->getDistance($data['latitude'], $data['longitude']) <= 100) {
                $result[$data['affiliate_id']] = $data;
            }
        }

        ksort($result);

        return view('result', ["result" => $result]);
    }
}
