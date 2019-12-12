<?php

use Illuminate\Database\Seeder;

class ProductFeatureValueDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_feature_value_descriptions')->insert([
            [
                'product_feature_value_id' => 1,
                'value' => 'Blue',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_feature_value_id' => 1,
                'value' => 'Red',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_feature_value_id' => 1,
                'value' => 'Black',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_feature_value_id' => 2,
                'value' => 'XL',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
