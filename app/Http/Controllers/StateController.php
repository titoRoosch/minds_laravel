<?php

namespace App\Http\Controllers;

use App\Operations\State\StateSearcher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class StateController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getStates() {
        $operation = new StateSearcher();
        $address = $operation->search();

        return response($address, 200)
            ->header('Content-Type', 'text/json');
    }

    public function getStateById(Request $req) {
        $operation = new StateSearcher();

        $address = $operation->search($req->state_id);

        return response($address, 200)
            ->header('Content-Type', 'text/json');
    }
}
