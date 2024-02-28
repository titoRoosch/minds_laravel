<?php

namespace App\Operations\User;

use App\Models\User;

class UserSearcher
{

    public function __construct() {

    }

    public function search($userid = null) {

        $search = User::with('address', 'city', 'state');
        
        if($userid) {
            return $search->where('id', $userid)->first();
        }

        return $search->get();
    }
}