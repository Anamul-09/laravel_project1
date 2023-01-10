<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        //CALLING FACTORY
        Product::factory(10)->create();

        // CALLING SEEDER

        // $this->call([
        //     // ProductSeeder::class,

        // ]);
    }
}
