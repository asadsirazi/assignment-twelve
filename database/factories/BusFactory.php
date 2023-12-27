<?php

namespace Database\Factories;

use App\Enums\BusType;
use App\Enums\Status;
use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BusFactory extends Factory
{
    protected $model = Bus::class;

    public function definition(): array
    {
        return [
            'name'       => $this->faker->name(),
            'type'       => BusType::tryFrom($this->faker->numberBetween(0, 1))->value,
            'status'     => Status::tryFrom($this->faker->numberBetween(0, 1))->value,
            'seat_capacity' => 36,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
