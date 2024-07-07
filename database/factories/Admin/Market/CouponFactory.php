<?php

namespace Database\Factories\Admin\Market;

use App\Models\Admin\Market\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Market\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Coupon::class;
    public function definition(): array
    {
        $type = $this->faker->randomElement(['percentage', 'fixed']);
        $isPercentage = ($type === 'percentage');

        return [
            'code' => strtoupper(Str::random(8)),
            'type' => $type,
            'value' => $isPercentage ? $this->faker->numberBetween(5, 50) : $this->faker->numberBetween(500, 10000),
            'min_purchase' => $this->faker->optional()->numberBetween(1000, 50000),
            'max_discount' => $isPercentage ? $this->faker->optional()->numberBetween(1000, 5000) : null,
            'start_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+3 months'),
            'is_active' => $this->faker->boolean(80),
            'usage_limit' => $this->faker->optional()->numberBetween(1, 100),
            'usage_count' => $this->faker->numberBetween(0, 50),
        ];
    }
}
