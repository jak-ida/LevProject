<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable = [
        'C_Code',
        'C_Name',
        'Pd_Code',
        'Pd_Name',
    ];
}
