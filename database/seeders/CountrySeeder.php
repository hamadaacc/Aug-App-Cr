<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([	'countryNameAr'=>'المملكة العربية السعودية'	,	'countryNameEn'=>'Saudi Arabia'	]);
        DB::table('countries')->insert([	'countryNameAr'=>'جمهورية مصر العربية'	,	'countryNameEn'=>'Egypt'	]);


    }
}
