<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
        	[
        		'news_title'=>'Noi com dien',
        		'news_content'=>'ABC',
        		'news_image'=>'bonoi1.jpg',
        	],
        ];
        DB::table('news')->insert($data);
    }
}
