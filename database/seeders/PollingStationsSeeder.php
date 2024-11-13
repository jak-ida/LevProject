<?php

namespace Database\Seeders;

use App\Models\Constituencies;
use App\Models\PollingDistricts;
use App\Models\PollingStation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollingStationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $constituencies = Constituencies::all();
        $pollingDistricts = PollingDistricts::all();
        $pollingStations = PollingStation::all();


    }
}
