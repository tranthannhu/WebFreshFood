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
                'origin_price' => '25000',
                'sell_price' => '17000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/apple.jpg',
            ),
            array(
                'category_id' => '1',
                'product_name' => 'Orange',
                'sku' => 'F-2',
                'origin_price' => '26000',
                'sell_price' => '15000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/orange.jpg',
            ),
            array(
                'category_id' => '1',
                'product_name' => 'Banana',
                'sku' => 'F-3',
                'origin_price' => '30000',
                'sell_price' => '25000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/banana.jpg',
            ),
            array(
                'category_id' => '1',
                'product_name' => 'Grapes',
                'sku' => 'F-3',
                'origin_price' => '30000',
                'sell_price' => '25000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/grapes.jpg',
            ),
            array(
                'category_id' => '2',
                'product_name' => 'Onion',
                'sku' => 'V-1',
                'origin_price' => '30000',
                'sell_price' => '25000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/onion.jpg',
            ),
            array(
                'category_id' => '2',
                'product_name' => 'Kale',
                'sku' => 'V-2',
                'origin_price' => '30000',
                'sell_price' => '25000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/kale.jpg',
            ),
            array(
                'category_id' => '2',
                'product_name' => 'Cabbage',
                'sku' => 'V-3',
                'origin_price' => '30000',
                'sell_price' => '25000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/cabbage.jpg',
            ),
            array(
                'category_id' => '2',
                'product_name' => 'Asparagus',
                'sku' => 'V-4',
                'origin_price' => '35000',
                'sell_price' => '29000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/Asparagus.jpg',
            ),
            // ----------------
            array(
                'category_id' => '6',
                'product_name' => 'Beef',
                'sku' => 'M-1',
                'origin_price' => '35000',
                'sell_price' => '29000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/Beef.jpg',
            ),
            array(
                'category_id' => '6',
                'product_name' => 'Salmon',
                'sku' => 'M-2',
                'origin_price' => '35000',
                'sell_price' => '29000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/Salmon.jpg',
            ),
            array(
                'category_id' => '6',
                'product_name' => 'Sausage',
                'sku' => 'M-3',
                'origin_price' => '45000',
                'sell_price' => '30000',
                'description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. 

                The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass When the mountains, your home and your allies, and the great gods will labor, a ridiculous mouse will be born. As long as the cats, nor the compensation, the kids eu, any price, sem. No consequences for any mass. Until the foot is just, our customers or, bananas and not, the superhero needs, the bow. The pain itself is love, the pain of the customer. ',
                'short_description' => 'The pain itself is love, the pain of the customer. Aeneas needs pain. Aeneas mass The mountains will labor with their allies, and their homes, and their great gods; Until then...',
                'image' => 'images/Sausage.jpg',
            ),
        ));
    }
}
