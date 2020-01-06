<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SubscriberSeeder::class);
        factory(App\Product::class, 20)->create();
        factory(App\Blog::class, 6)->create();
        factory(App\TopProduct::class, 4)->create();
//        $this->call(UserTestNames::class);
    }
}
