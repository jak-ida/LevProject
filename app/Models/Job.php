<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Job extends Model{
    protected $table = 'job_listings';
    protected $time_stamps = false;
    protected $fillable = ['title','salary'];


}




?>
