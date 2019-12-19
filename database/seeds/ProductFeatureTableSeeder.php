<?php

use Illuminate\Database\Seeder;

class ProductFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_features')->insert([
            [
                'product_id' => 1,
                'product_feature_value_id' => 1,
                'product_feature_value_description_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 2,
                'product_feature_value_id' => 2,
                'product_feature_value_description_id' => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 3,
                'product_feature_value_id' => 1,
                'product_feature_value_description_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 4,
                'product_feature_value_id' => 2,
                'product_feature_value_description_id' => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],[
                'product_id' => 1,
                'product_feature_value_id' => 1,
                'product_feature_value_description_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 2,
                'product_feature_value_id' => 3,
                'product_feature_value_description_id' => 6,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 4,
                'product_feature_value_id' => 2,
                'product_feature_value_description_id' => 5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 3,
                'product_feature_value_id' => 1,
                'product_feature_value_description_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],[
                'product_id' => 1,
                'product_feature_value_id' => 2,
                'product_feature_value_description_id' => 5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'product_id' => 1,
                'product_feature_value_id' => 3,
                'product_feature_value_description_id' => 6 ,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
