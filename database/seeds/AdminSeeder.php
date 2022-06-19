<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(array(
            array(
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('12341234'),
            'role' => 'ADMIN'
            ),
            array(
            'first_name' => 'Thanh',
            'last_name' => 'Nhu',
            'email' => 'user1@demo.com',
            'password' => Hash::make('12341234'),
            'role' => '1'
            ),
            array(
                'first_name' => 'Nhat',
                'last_name' => 'Tan',
                'email' => 'user2@demo.com',
                'password' => Hash::make('12341234'),
                'role' => '1'
            ),
            array(
                'first_name' => 'Karim',
                'last_name' => 'Benzema',
                'email' => 'user3@demo.com',
                'password' => Hash::make('12341234'),
                'role' => '1'
            ),
            array(
                'first_name' => 'Cr',
                'last_name' => 'Ronaldo',
                'email' => 'user4@demo.com',
                'password' => Hash::make('12341234'),
                'role' => '1'
                )
        ));
    }
}
