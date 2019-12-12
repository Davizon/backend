<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->call(ProductTableSeeder::class);
            $this->call(ProductFeatureValueTableSeeder::class);
            $this->call(ProductFeatureValueDescriptionTableSeeder::class);
            $this->call(ProductFeatureTableSeeder::class);

    }
}
