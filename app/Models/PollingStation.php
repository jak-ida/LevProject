<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingStation extends Model
{
    use HasFactory;

    protected $fillable = [
        'C_Code',
        'C_Name',
        'Pd_Code',
        'Pd_Name',
        'Ps_Code',
        'Ps_Name',
    ];
     // The following code defines the relationship with "Constituencies"
     public function Constituencies()
     {
         return $this->belongsTo(Constituencies::class);
     }
    // The following code defines the relationship with "Polling District"
    public function pollingDistrict()
    {
        return $this->belongsTo(PollingDistricts::class);
    }

    // The following code defines the relationship with "Countries"
    public function country()
    {
        return $this->belongsTo(Countries::class);
    }
}
