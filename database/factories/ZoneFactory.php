<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zone>
 */
class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $zoneData = fake()->uniqueZone();
        return [
            'name' => $zoneData['name'],
            'lat' => $zoneData['lat'],
            'long' => $zoneData['long'],
            'city_id' => $zoneData['city_id']
        ];
    }
}
