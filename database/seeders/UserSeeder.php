<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'Breno Master',
            'name' => 'Breno',
            'lastname' => 'Sousa Castro',
            'telefone' => '(62) 99522-5796',
            'email' => 'brenosousacst@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'active' => 1,
            'role_id' => 1,
            'empresa_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

