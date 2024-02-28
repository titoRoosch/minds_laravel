<?php

namespace App\Operations\State;

use App\Models\State;

class StateSearcher
{

    public function __construct() {

    }

    public function search($stateId = null) {

        $search = State::with('address', 'city');
        
        if($stateId) {
            return $search->where('id', $stateId)->first();
        }

        return $search->get();
    }
}