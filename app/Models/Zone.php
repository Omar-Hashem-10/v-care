<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    /** @use HasFactory<\Database\Factories\ZoneFactory> */
    use HasFactory;

    protected $fillable = ['name', 'lat', 'long', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
