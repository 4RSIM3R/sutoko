<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function practioner()
    {
        return $this->belongsTo(Practioner::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
