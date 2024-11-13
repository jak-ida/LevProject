<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constituencies extends Model
{
    protected $fillable = ['c_code', 'c_name'];

    // The following code defines the relationship with "PollingDistricts"
    public function pollingDistricts()
    {
        return $this->hasMany(PollingDistricts::class);
    }

    // The following code defines the relationship with "PollingStations"
    public function pollingStations()
    {
        return $this->hasMany(PollingStation::class);
    }
}
