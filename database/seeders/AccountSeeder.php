<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'accountNumber' => '1',
            'accountNameEn' => 'Assets',
            'accountNameAr' => 'الاصول',
            'parent_id' =>  null,
            'parentNameEn' => 'root',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '2',
            'accountNameEn' => 'liabilities',
            'accountNameAr' => 'الخصوم',
            'parent_id' =>  null,
            'parentNameEn' => 'root',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '3',
            'accountNameEn' => 'Expenses',
            'accountNameAr' => 'المصروفات',
            'parent_id' =>  null,
            'parentNameEn' => 'root',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '4',
            'accountNameEn' => 'Revenues',
            'accountNameAr' => 'الايرادات',
            'parent_id' =>  null,
            'parentNameEn' => 'root',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '11',
            'accountNameEn' => 'Current-Assets',
            'accountNameAr' => 'الاصوف المتداولة',
            'parent_id' =>  1,
            'parentNameEn' => 'Current-Assets',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '111',
            'accountNameEn' => 'Cash & Cash Equivalent',
            'accountNameAr' => 'النقد والنقد المعادل',
            'parent_id' =>  11,
            'parentNameEn' => 'Current-Assets',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '5',
            'accountNameEn' => 'Equity',
            'accountNameAr' => 'حقوق الملكية',
            'parent_id' =>  null,
            'parentNameEn' => 'root',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '21',
            'accountNameEn' => 'Current-Liabilities',
            'accountNameAr' => 'الخصوم المتداولة',
            'parent_id' =>  2,
            'parentNameEn' => 'Liabilities',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '211',
            'accountNameEn' => 'Vendors',
            'accountNameAr' => 'الموردون',
            'parent_id' =>  21,
            'parentNameEn' => 'Current-Liabilities',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('accounts')->insert([
            'accountNumber' => '31',
            'accountNameEn' => 'Delegation-Exp',
            'accountNameAr' => 'مصروف الانتدابات',
            'parent_id' =>  3,
            'parentNameEn' => 'Expenses',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);


    }
}
