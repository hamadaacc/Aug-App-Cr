<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([	'provinceNameAr'=>'الباحة'	,	'provinceNameEn'=>'Al Baha'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'الجوف'	,	'provinceNameEn'=>'Al Jawf'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'المدينة المنورة'	,	'provinceNameEn'=>'Al Madinah Al Munawwarah'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'القصيم'	,	'provinceNameEn'=>'Al Qassim'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'الرياض'	,	'provinceNameEn'=>'Ar Riyadh'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'عسير'	,	'provinceNameEn'=>'Asir'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'الدقهلية'	,	'provinceNameEn'=>'Daqahliah'	,	'country_id'=>'2'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'الشرقية'	,	'provinceNameEn'=>'Eastern'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'حائل'	,	'provinceNameEn'=>'Hail'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'جازان'	,	'provinceNameEn'=>'Jazan'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'مكة المكرمة'	,	'provinceNameEn'=>'Makkah Al Mukarramah'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'نجران'	,	'provinceNameEn'=>'Najran'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'الحدود الشمالية'	,	'provinceNameEn'=>'Northern Frontier'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'تبوك'	,	'provinceNameEn'=>'Tabuk'	,	'country_id'=>'1'	]);
        DB::table('provinces')->insert([	'provinceNameAr'=>'القاهرة الكبري'	,	'provinceNameEn'=>'Upper Cairo'	,	'country_id'=>'2'	]);

    }
}
