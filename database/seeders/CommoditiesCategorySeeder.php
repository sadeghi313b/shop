<?php

namespace Database\Seeders;

use App\Models\CommoditiesCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommoditiesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CommoditiesCategory::factory(20)->create();
    }
}
