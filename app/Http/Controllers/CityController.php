<?php

namespace App\Http\Controllers;

use App\Operations\City\CitySearcher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class CityController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getCities() {
        $operation = new CitySearcher();
        $address = $operation->search();

        return response($address, 200)
            ->header('Content-Type', 'text/json');
    }

    public function getCityById(Request $req) {
        $operation = new CitySearcher();

        $address = $operation->search($req->city_id);

        return response($address, 200)
            ->header('Content-Type', 'text/json');
    }

}
