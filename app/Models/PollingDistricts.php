<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingDistricts extends Model
{
    protected $fillable =[
        'pd_code',
        'pd_name',
        'constituency_id',
    ];

    // The following code defines the relationship with "Polling Stations"
    public function pollingStations()
    {
        return $this->hasMany(PollingStation::class);
    }

    // The following code defines the relationship with "Constituencies"
    public function constituency()
    {
        return $this->belongsTo(Constituencies::class);
    }
}
