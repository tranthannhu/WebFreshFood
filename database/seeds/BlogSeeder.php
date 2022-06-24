<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(array(
            array(
            'category_id' => '1',
            'title' => 'The best time of day to eat oranges',
            'short_description' => 'to assimilate all the  nutrients of oranges and this also applies to all other fruits - it is best to esat them on an empty stomach, in the morning for breakfast...',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer
            The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus.
            
            The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come free from the said pain. Until the end of the season.
            
            Here, we bring you a look-see:
            
            The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come to the couch with the free pull of the pillows, in the said desire of mourning.
            
            The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum',
            'tags' => 'orange',
            'image' => 'images/orangeBlog.jpg'
            ),
            array(
                'category_id' => '1',
                'title' => 'Lorem ipsum dolor sit amet, consectetuer',
                'short_description' => 'The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love...',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer
                The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus.
                
                The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come free from the said pain. Until the end of the season.
                
                Here, we bring you a look-see:
                
                The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come to the couch with the free pull of the pillows, in the said desire of mourning.
                
                The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum',
                'tags' => 'apple',
                'image' => 'images/appleBlog.jpg'
                ),
            array(
                'category_id' => '1',
                'title' => 'Lorem ipsum dolor sit amet, consectetuer',
                'short_description' => 'The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love...',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer
                The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus.
                
                The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come free from the said pain. Until the end of the season.
                
                Here, we bring you a look-see:
                
                The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come to the couch with the free pull of the pillows, in the said desire of mourning.
                
                The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum',
                'tags' => 'apple',
                'image' => 'images/appleBlog.jpg'
                ),
                array(
                    'category_id' => '2',
                    'title' => 'Lorem ipsum dolor sit amet, consectetuer',
                    'short_description' => 'The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love...',
                    'description' => 'Lorem ipsum dolor sit amet, consectetuer
                    The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus.
                    
                    The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come free from the said pain. Until the end of the season.
                    
                    Here, we bring you a look-see:
                    
                    The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come to the couch with the free pull of the pillows, in the said desire of mourning.
                    
                    The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum',
                    'tags' => 'kale',
                    'image' => 'images/kaleBlog.jpg'
                    ),
                    array(
                        'category_id' => '2',
                        'title' => 'Lorem ipsum dolor sit amet, consectetuer',
                        'short_description' => 'The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love...',
                        'description' => 'Lorem ipsum dolor sit amet, consectetuer
                        The Internet is simply dummy text of the printing and typeset ting industry. The Internet has been the industry standard dummy industry standard. Over the years, I will come. The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus.
                        
                        The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come free from the said pain. Until the end of the season.
                        
                        Here, we bring you a look-see:
                        
                        The pain itself is important, and the pain is enhanced by the adipiscing process, so I give it time to cut down some great pain. In order to manage it, I will come to the couch with the free pull of the pillows, in the said desire of mourning.
                        
                        The pain itself is love, the main storage system. Curabitur ut iaculis arcu. And so the developers, neither the vehicles itself nor the memories, nor the price of the Internet Curabitur pulvinar dui viverra libero lobortis in dictum velit luctus. Donec imperdiet tincidunt interdum',
                        'tags' => 'asparagus',
                        'image' => 'images/AsparagusBlog.jpg'
                        ),
        ));
    }
}
