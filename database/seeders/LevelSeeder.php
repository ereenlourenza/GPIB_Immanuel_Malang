<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_level' => 1,
                'kode_level' => 'ADM', 
                'nama_level' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_level' => 2,
                'kode_level' => 'PHMJ', 
                'nama_level' => 'Pengurus Harian Majelis Jemaat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_level' => 3,
                'kode_level' => 'PELKAT', 
                'nama_level' => 'Pelayanan Kategorial',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('tb_level')->insert($data);
    }
}
