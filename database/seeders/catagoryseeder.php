<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catagory;
use Faker\Factory as Faker;
class catagoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<100; $i++){
        $catagory = new Catagory;
        $catagory->catagory_name = $faker->name; 
        $catagory->product_id = $i;
        $catagory->save();
    }
    }
}
