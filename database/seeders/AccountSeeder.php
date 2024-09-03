<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    public function run()
    {
        DB::table('account')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('123'), // Hash password
                'name' => 'Admin User',
                'role' => 'admin',
            ],
            [
                'username' => 'author',
                'password' => Hash::make('123'), // Hash password
                'name' => 'Author User',
                'role' => 'author',
            ],
        ]);
    }
}
