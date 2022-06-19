<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert(array(
            array(
                'category_id' => '',
                'product_name' => '',
                'sku' => '',
                'origin_price' => '',
                'sell_price' => '',
                'discount_percent' => '',
                'description' => '',
                'short_description' => '',
                'size' => '',
                'color' => '',
                'quantity' => '',
                'image' => '',
            ),
            array(
                'category_name' => 'Vegetables',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-2_50x.png?v=1610532339',
                'description' => 'Cabbage, Onion, Kale, Parsley Garlic, Asparagus...'
            )
        ));
    }
}
