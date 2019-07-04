<?php

use Illuminate\Database\Seeder;
use App\Fruit;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fruits = factory(Fruit::class, 30)->create();
    }
}
