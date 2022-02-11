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
        // $this->call(UserSeeder::class);
        // factory(App\User::class, 1)->create();
        factory(App\Models\Products::class, 10)->create();
        factory(App\Models\Categories::class, 10)->create();
        factory(App\Models\ProductDetails::class, 10)->create();
    }
}
