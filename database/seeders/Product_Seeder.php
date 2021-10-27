<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'IPhone 12',
            'price'=>'35000',
            'description'=>'smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'iph12.png',
            'user_id'=>1
        ]);
    }
}
