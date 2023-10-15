<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pemain;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Pemain::class;
    public function definition()
    {
        return [
            'nama_pemain' => $this->faker->name,
            'nomor_punggung' => $this->faker->numberBetween(1, 99),
            'posisi' => $this->faker->randomElement(['Striker', 'Midfielder', 'Defender', 'Goalkeeper']),
        ];
    }
}
