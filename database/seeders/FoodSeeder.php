<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    DB::table('food')->insert([
    [  'name' => 'Nasi Goreng Spesial',
        'category' => 'Makanan',
        'price' => 25000,
        'description' => 'Nasi goreng dengan telur, ayam suwir, dan kerpuk',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],    

    [

        'name' => 'Mie Goreng Spesial',
        'category' => 'Makanan',
        'price' => 28000,
        'description' => 'Mi Goreng pedas dengan udang dan cumi',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [

        'name' => 'Es Teh Manis',
        'category' => 'Minuman',
        'price' => 5000,
        'description' => 'Es teh melati segar',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [

        'name' => 'Jus Alpukat',
        'category' => 'Minuman',
        'price' => 15000,
        'description' => 'Jus alpukat murni dengan susu coklat',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],    
    [

        'name' => 'Kentang Goreng',
        'category' => 'Makanan',
        'price' => 12000,
        'description' => 'Kentang goreng dengan saus keju',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],    
    
    ]);
        //
    }
}
