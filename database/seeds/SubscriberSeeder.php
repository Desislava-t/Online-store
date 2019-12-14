<?php

use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribes')->insert([
            [
                'email' => uniqid('test@abv.bg'),
            ],
            [
                'email' => uniqid('test1@abv.bg'),
            ],

        ]);
    }
}
