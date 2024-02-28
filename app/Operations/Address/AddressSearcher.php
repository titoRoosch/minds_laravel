<?php

namespace App\Operations\Address;

use App\Models\Address;

class AddressSearcher
{

    public function __construct() {

    }

    public function search($addressId = null) {

        $search = Address::with('city', 'state');
        
        if($addressId) {
            return $search->where('id', $addressId)->first();
        }

        return $search->get();
    }
}