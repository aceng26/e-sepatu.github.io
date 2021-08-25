<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            DB::table('products')->insert([
                'nama' => 'CONVERS ALL STAR OLD SCHOOL',
                'gambar' => 'all-star.png'
            ]);
    
            DB::table('products')->insert([
                'nama' => 'CONVERS ALL STAR CARTOON',
                'gambar' => 'all-star-gambar.png'
            ]);
    
            DB::table('products')->insert([
                'nama' => 'CONVERS ALL STAR WHITE GREEN',
                'gambar' => 'all-star-putih-ijo.png'
            ]);
    
            DB::table('products')->insert([
                'nama' => 'VANS CATUR',
                'gambar' => 'catur.png'
            ]);
    
            DB::table('products')->insert([
                'nama' => 'NIKE AIR MAX 1',
                'gambar' => 'nike-1.png'
            ]);
    
            DB::table('products')->insert([
                'nama' => 'NIKE AIR MAX 2',
                'gambar' => 'nike-2.png'
            ]);
    
            DB::table('products')->insert([
                'nama' => 'VANS OLD SCHOOL HITAM PUTIH',
                'gambar' => 'vans-black-white.png'
            ]);

            DB::table('products')->insert([
                'nama' => 'VANS OLD SCHOOL YELLOW',
                'gambar' => 'vans-kuning.png'
            ]);

            DB::table('products')->insert([
                'nama' => 'VANS OLD SCHOOL BLUE',
                'gambar' => 'vans-biru.png'
            ]);
    }
}
