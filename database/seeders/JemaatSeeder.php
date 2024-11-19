<?php

namespace Database\Seeders;

use App\Models\JemaatModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 50 data jemaat dummy
        JemaatModel::factory()->count(50)->create();
    }
}
