<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Address extends Model
{
    use HasFactory;

    public function city(): belongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function state(): belongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
