<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([	'cityNameAr'=>'ابها'	,	'cityNameEn'=>'Abha'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'ابو عريش'	,	'cityNameEn'=>'Abu Arish'	,	'province_id'=>'10'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الدمام'	,	'cityNameEn'=>'Ad Dammam'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الدلم'	,	'cityNameEn'=>'Ad Dilam'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الدرعية'	,	'cityNameEn'=>'Ad Diriyah'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الدوادمي'	,	'cityNameEn'=>'Ad Duwadimi'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'عفيف'	,	'cityNameEn'=>'Afif'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'احد المسارحة'	,	'cityNameEn'=>'Ahad Al Musarihah'	,	'province_id'=>'10'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'احد رفيده'	,	'cityNameEn'=>'Ahad Rifaydah'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'البدائع'	,	'cityNameEn'=>'Al Badai'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الباحة'	,	'cityNameEn'=>'Al Baha'	,	'province_id'=>'1'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'البكيرية'	,	'cityNameEn'=>'Al Bukayriyah'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الغاط'	,	'cityNameEn'=>'Al Ghat'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الحريق'	,	'cityNameEn'=>'Al Hariq'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الهفوف'	,	'cityNameEn'=>'Al Hufuf'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الجبيل'	,	'cityNameEn'=>'Al Jubail'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الجموم'	,	'cityNameEn'=>'Al Jumum'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الخفجي'	,	'cityNameEn'=>'Al Khafji'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الخرج'	,	'cityNameEn'=>'Al Kharj'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الخبر'	,	'cityNameEn'=>'Al Khubar'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الخرمة'	,	'cityNameEn'=>'Al Khurmah'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'المدينة المنورة'	,	'cityNameEn'=>'Al Madinah Al Munawwarah'	,	'province_id'=>'3'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'المجاردة'	,	'cityNameEn'=>'Al Majardah'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'المجمعة'	,	'cityNameEn'=>'Al Majmaah'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'المذنب'	,	'cityNameEn'=>'Al Midhnab'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'المزاحمية'	,	'cityNameEn'=>'Al Muzahimiyah'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'القطيف'	,	'cityNameEn'=>'Al Qatif'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'القنفذة'	,	'cityNameEn'=>'Al Qunfidhah'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'القريات'	,	'cityNameEn'=>'Al Qurayyat'	,	'province_id'=>'2'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الوجه'	,	'cityNameEn'=>'Al Wajh'	,	'province_id'=>'14'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'البحيرة'	,	'cityNameEn'=>'Albehirah'	,	'province_id'=>'7'	,	'country_id'=>'2'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'النعيرية'	,	'cityNameEn'=>'An Nuayriyah'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الرس'	,	'cityNameEn'=>'Ar Rass'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'عرعر'	,	'cityNameEn'=>'Arar'	,	'province_id'=>'13'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'السليل'	,	'cityNameEn'=>'As Sulayyil'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الشماسية'	,	'cityNameEn'=>'Ash Shimasiyah'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الشنان'	,	'cityNameEn'=>'Ash Shinan'	,	'province_id'=>'9'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الطائف'	,	'cityNameEn'=>'At Taif'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الزلفي'	,	'cityNameEn'=>'Az Zulfi'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'بدر'	,	'cityNameEn'=>'Badr'	,	'province_id'=>'3'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'بللسمر'	,	'cityNameEn'=>'Billasmar'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'بيشة'	,	'cityNameEn'=>'Bishah'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'بقيق'	,	'cityNameEn'=>'Buqayq'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'بريدة'	,	'cityNameEn'=>'Buraydah'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'دومة الجندل'	,	'cityNameEn'=>'Dawmat Al Jandal'	,	'province_id'=>'2'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الظهران'	,	'cityNameEn'=>'Dhahran'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'ضبا'	,	'cityNameEn'=>'Duba'	,	'province_id'=>'14'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الجيزة'	,	'cityNameEn'=>'Gizah'	,	'province_id'=>'15'	,	'country_id'=>'2'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'حفر الباطن'	,	'cityNameEn'=>'Hafar Al Batin'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'حائل'	,	'cityNameEn'=>'Hail'	,	'province_id'=>'9'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'حوطة بني تميم'	,	'cityNameEn'=>'Hawtat Bani Tamim'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'عنك'	,	'cityNameEn'=>'Inak'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'جازان'	,	'cityNameEn'=>'Jazan'	,	'province_id'=>'10'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'جدة'	,	'cityNameEn'=>'Jeddah'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'خميس مشيط'	,	'cityNameEn'=>'Khamis Mushayt'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'خيبر'	,	'cityNameEn'=>'Khaybar'	,	'province_id'=>'3'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'مدينة الملك عبدالله الاقتصادية'	,	'cityNameEn'=>'King Abdullah Economic City'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'ليلى'	,	'cityNameEn'=>'Layla'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'مكة المكرمة'	,	'cityNameEn'=>'Makkah Al Mukarramah'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'محايل'	,	'cityNameEn'=>'Muhayil'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'نجران'	,	'cityNameEn'=>'Najran'	,	'province_id'=>'12'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'قرية العليا'	,	'cityNameEn'=>'Qaryat Al Ulya'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'القويعية'	,	'cityNameEn'=>'Quwayiyah'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'رابغ'	,	'cityNameEn'=>'Rabigh'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'رفحاء'	,	'cityNameEn'=>'Rafha'	,	'province_id'=>'13'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'رأس تنورة'	,	'cityNameEn'=>'Ras Tannurah'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'رياض الخبراء'	,	'cityNameEn'=>'Riyad Al Khabra'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'الرياض'	,	'cityNameEn'=>'Riyadh'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'صبيا'	,	'cityNameEn'=>'Sabya'	,	'province_id'=>'10'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'صفوى'	,	'cityNameEn'=>'Safwa'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'سكاكا'	,	'cityNameEn'=>'Sakaka'	,	'province_id'=>'2'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'صامطة'	,	'cityNameEn'=>'Samtah'	,	'province_id'=>'10'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'سيهات'	,	'cityNameEn'=>'Sayhat'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'شقراء'	,	'cityNameEn'=>'Shaqra'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'شرورة'	,	'cityNameEn'=>'Sharurah'	,	'province_id'=>'12'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'تبوك'	,	'cityNameEn'=>'Tabuk'	,	'province_id'=>'14'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'تاروت'	,	'cityNameEn'=>'Tarut'	,	'province_id'=>'8'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'تثليث'	,	'cityNameEn'=>'Tathilith'	,	'province_id'=>'6'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'ثادق'	,	'cityNameEn'=>'Thadiq'	,	'province_id'=>'5'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'ثول'	,	'cityNameEn'=>'Thuwal'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'طريف'	,	'cityNameEn'=>'Turaif'	,	'province_id'=>'13'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'تربه'	,	'cityNameEn'=>'Turbah'	,	'province_id'=>'11'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'املج'	,	'cityNameEn'=>'Umluj'	,	'province_id'=>'14'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'عنيزة'	,	'cityNameEn'=>'Unayzah'	,	'province_id'=>'4'	,	'country_id'=>'1'	]);
        DB::table('cities')->insert([	'cityNameAr'=>'ينبع'	,	'cityNameEn'=>'Yanbu'	,	'province_id'=>'3'	,	'country_id'=>'1'	]);

    }
}
