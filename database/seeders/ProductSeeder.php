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
        DB::table('products')->insert([
            [
                'name'=>'Robot Model',
                'price'=>'20',
                'description'=>'Latest plastic model',
                'category'=>"toys",
                "gallery"=>"https://www.gundam.my/images/sell_products/big/image_5080.jpg"
            ],
            [
                'name'=>'Smartphone',
                'price'=>'100',
                'description'=>'Latest phone',
                'category'=>"mobile",
                "gallery"=>"https://www.powerplanetonline.com/cdnassets/xiaomi_black_shark_3_8gb_128gb_03_negro_ad_l.jpg"
            ],
            [
                'name'=>'Laptop',
                'price'=>'500',
                'description'=>'Sophisticated computer',
                'category'=>"computer",
                "gallery"=>"https://www.notebookcheck.net/uploads/tx_nbc2/2043227-n0_10.jpg"
            ],
            [
                'name'=>'Game Console',
                'price'=>'300',
                'description'=>'Latest console',
                'category'=>"games",
                "gallery"=>"https://d2skuhm0vrry40.cloudfront.net/2020/articles/2020-07-21-14-25/ps5_pre_order_header.jpg/EG11/thumbnail/750x422/format/jpg/quality/60"
            ],
            [
                'name'=>'Handheld Game',
                'price'=>'200',
                'description'=>'Enjoyable games',
                'category'=>"games",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/71qmF0FHj7L._AC_SX679_.jpg"
            ],


        ]);
    }
}
