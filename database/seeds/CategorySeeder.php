<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categories')->insert(array(
            array(
                'category_name' => 'Fresh Fruits',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-1_50x.png?v=1610532339',
                'description' => 'Apple, Orange, Watermelon, Banana Pineapple, Grapes...'
            ),
            array(
                'category_name' => 'Vegetables',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-2_50x.png?v=1610532339',
                'description' => 'Cabbage, Onion, Kale, Parsley Garlic, Asparagus...'
            ),
            array(
                'category_name' => 'Fresh Juices',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-3_50x.png?v=1610532339',
                'description' => 'Apple, Orange, Watermelon, Banana Pineapple, Grapes...'
            ),
            array(
                'category_name' => 'Tea & Coffee',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-4_50x.png?v=1610532339',
                'description' => 'Leamon tea, Peach tea, Milk tea  Weight loss tea, Coffee ...'
            ),
            array(
                'category_name' => 'Bread',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-5_50x.png?v=1610532339',
                'description' => 'Bread, CupCake, Croissants, Rice cake, Donus  ...'
            ),
            array(
                'category_name' => 'Fresh Meats',
                'icon' => 'https://cdn.shopify.com/s/files/1/0527/6880/0966/files/v-6_50x.png?v=1610532339',
                'description' => 'Pork, Beef, Lamb chops, Salmon Chicken, Sausage...'
            ),
        ));
    }
}
