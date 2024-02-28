<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class State extends Model
{
    use HasFactory;

    public function address(): hasMany
    {
        return $this->hasMany(Address::class);
    }

    public function city(): hasMany
    {
        return $this->hasMany(City::class);
    }
}
