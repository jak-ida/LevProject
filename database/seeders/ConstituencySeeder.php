<?php

namespace Database\Seeders;

use App\Models\Constituencies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConstituencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $constituencies = ['','','','','','',''];
        foreach($constituencies as $constituency){
            // Constituencies::create([
            //         '' => $constituency,
            // ]);
        }
    }
}
