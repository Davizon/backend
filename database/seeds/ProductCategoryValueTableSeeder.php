<?php

use Illuminate\Database\Seeder;

class ProductCategoryValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category_values')->insert([
            [
                'label' => 'Women',
                'parent_id' => '0',
                'value' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Men',
                'parent_id' => '0',
                'value' => '2',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Electronics',
                'parent_id' => '0',
                'value' => '3',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => "Kid's",
                'parent_id' => '0',
                'value' => '4',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => "Home & Living",
                'parent_id' => '0',
                'value' => '5',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => "Pets",
                'parent_id' => '0',
                'value' => '6',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => "Sports & Outdoor",
                'parent_id' => '0',
                'value' =>'7',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => "Books",
                'parent_id' => '0',
                'value' => '8',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => "Office & Stationary",
                'parent_id' => '0',
                'value' => '9',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Tops',
                'parent_id' => '1',
                'value' => '10',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Tops',
                'parent_id' => '2',
                'value' => '11',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Bottoms',
                'parent_id' => '1',
                'value' => '12',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Bottoms',
                'parent_id' => '2',
                'value' => '13',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Cameras & Accessories',
                'parent_id' => '3',
                'value' => '14',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'label' => 'Laptops & Tablets',
                'parent_id' => '3',
                'value' => '15',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
