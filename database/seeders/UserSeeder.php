<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_user' => 1,
                'id_level' => 1,
                'nama' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make('12345'),//class untuk mengenkripsikan/hash password
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'id_level' => 2,
                'nama' => 'Pengurus Harian Majelis Jemaat',
                'username' => 'phmj',
                'password' => Hash::make('12345'),//class untuk mengenkripsikan/hash password
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'id_level' => 3,
                'nama' => 'Pelayanan Kategorial',
                'username' => 'pelkat',
                'password' => Hash::make('12345'),//class untuk mengenkripsikan/hash password
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('tb_user')->insert($data);
    }
}
