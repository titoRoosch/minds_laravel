<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class City extends Model
{
    use HasFactory;

    public function state(): belongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
