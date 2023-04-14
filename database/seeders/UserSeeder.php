<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            [
                [
                    'name' => 'superadmin',
                    'email' => 'superadmin@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'superadmin',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'admin',
                    'status' => 'tidakaktif',
                ],
                [
                    'name' => 'finance',
                    'email' => 'finance@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'finance',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'staff',
                    'email' => 'staff@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'finance',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'reseller',
                    'email' => 'reseller@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'finance',
                    'status' => 'aktif',
                ],
                [
                    'name' => 'customer',
                    'email' => 'customer@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'finance',
                    'status' => 'aktif',
                ],
            ]

        );
    }
}