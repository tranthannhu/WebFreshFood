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
                'category_id' => '1',
                'product_name' => 'Apple',
                'sku' => 'F-1',
                'origin_price' => '2',
                'sell_price' => '1',
                'discount_percent' => '',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'size' => '',
                'color' => '',
                'quantity' => '',
                'image' => 'images/apple.jpg',
            ),
            array(
                'category_id' => '1',
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
        ));
    }
}
