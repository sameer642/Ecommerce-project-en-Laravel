<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert(
        	[
        		'name'=>'Oppo Mobile',
        		'price'=>'20000',
                'category'=>'Mobile',
                'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2020/04/Oppo-A12-500x500.jpg',
        		'description'=>'Smartphone with 8GB ram with new features'
                

            ],
            [
        		'name'=>'Samsung Tv',
        		'price'=>'40000',
                'category'=>'TV',
                'gallery'=>'https://images.samsung.com/is/image/samsung/in-fhdtv-n5200-ua32n5200arxxl-frontblack-184404442?$684_547_PNG$',
        		'description'=>'SmartTv with  new features'
                

        	],
            [
        		'name'=>'Lg Tv',
        		'price'=>'30000',
                'category'=>'Tv',
                'gallery'=>'https://4.imimg.com/data4/PR/VO/MY-17088056/lg-led-tv-500x500.jpg',
        		'description'=>'SmartTv with new features'
                

        	]
        );
    }
}
