<?php

namespace Tipoff\FlexScheduling\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlexDayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = app('flex_day');

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween($startDate = 'today', $endDate = '+14 days')->format("Y-m-d"),
        ];
    }
}
