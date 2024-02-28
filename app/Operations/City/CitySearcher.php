<?php

namespace App\Operations\City;

use App\Models\City;

class CitySearcher
{

    public function __construct() {

    }

    public function search($cityId = null) {

        $search = City::with('state');
        
        if($cityId) {
            return $search->where('id', $cityId)->first();
        }

        return $search->get();
    }
}