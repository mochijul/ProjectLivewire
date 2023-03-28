<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'user',
            'email'=>'user@user.com',
            'role_id'=> 1,
            'password'=>Hash::make('user'),
        ]);
        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'role_id'=>2,
            'password'=>Hash::make('admin'),
        ]);
        User::create([
            'name'=>'superadmin',
            'email'=>'superadmin@superadmin.com',
            'role_id'=>3,
            'password'=>Hash::make('superadmin'),
        ]);
    }
}
