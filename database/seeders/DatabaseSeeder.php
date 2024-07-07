<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            AdminSeeder::class,
            BrandSeeder::class,
            CommoditiesCategorySeeder::class,
            CouponSeeder::class,
            DeliverySeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            // Add any other seeders you have here
        ]);
    }
}
