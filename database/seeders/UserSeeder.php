<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'hamada',
            'email' => 'hamada_acc@yahoo.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),

        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123123'),
            'profile_photo_path' => 'profile-photos/oyUfzM242XEo5yZjWyHiMFoWOnMhSmlOjrXAcLom.png',
            'created_at' => now()->toDateTimeString(),
            'updated_at'=> now()->toDateTimeString(),
        ]);

    }
}
