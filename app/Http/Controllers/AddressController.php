<?php

namespace App\Http\Controllers;

use App\Operations\Address\AddressCreate;
use App\Operations\Address\AddressDelete;
use App\Operations\Address\AddressUpdate;
use App\Operations\Address\AddressSearcher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AddressController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getAddresses() {
        $operation = new AddressSearcher();
        $address = $operation->search();

        return response($address, 200)
            ->header('Content-Type', 'text/json');
    }

    public function getAddressById(Request $req) {
        $operation = new AddressSearcher();

        $address = $operation->search($req->address_id);

        return response($address, 200)
            ->header('Content-Type', 'text/json');
    }
}
