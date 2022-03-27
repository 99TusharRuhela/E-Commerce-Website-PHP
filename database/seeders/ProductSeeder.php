<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Mi Note 10Pro',
                'price'=>'17000',
                'description'=>'a smart phone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://i01.appmifile.com/webfile/globalimg/products/pc/redmi-note-10-pro/specs-header.png',
            ],
            [
                'name'=>'Iphone 12',
                'price'=>'100000',
                'description'=>'a smart phone with 128gb and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-12-2.jpg',
            ],
            [
                'name'=>'Samsung LED',
                'price'=>'30000',
                'description'=>'a smart led and much more feature',
                'category'=>'tv',
                'gallery'=>'https://5.imimg.com/data5/YQ/MT/MY-36803873/samsung-led-tv-500x500.jpg',
            ],[
                'name'=>'Washing Machine',
                'price'=>'13000',
                'description'=>'a smart washing machine and much more feature',
                'category'=>'electronics',
                'gallery'=>'https://www.lg.com/in/images/washing-machines/md07514753/gallery/FHM1065ZDL-Washing-Machines-Front-View-D-01.jpg',
            ]
        ]);
    }
}
