<?php

namespace Database\Factories;

use App\Models\JemaatModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JemaatModel>
 */
class JemaatModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = JemaatModel::class;
     
    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'jenis_kelamin'     => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2005-01-01'),
            'alamat' => $this->faker->address(),
            'no_telepon' => $this->faker->numerify('+62 (###) ###-####'), // Format telepon pendek
            'email' => $this->faker->unique()->safeEmail(),
            'status_perkawinan' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Janda', 'Duda']),
            'pekerjaan'         => $this->faker->jobTitle(),
            'tanggal_baptisan'  => $this->faker->optional()->date(),
            'tanggal_pernikahan'=> $this->faker->optional()->date(),
            'status_keanggotaan'=> $this->faker->randomElement(['Aktif', 'Non Aktif', 'Tidak Terdefinisi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
