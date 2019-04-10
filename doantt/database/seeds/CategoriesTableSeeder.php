<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        		'cate_name'=>'Nồi điện, Nồi cơm điện',
        		'cate_slug'=>str_slug('Nồi điện, Nồi cơm điện')
        	],
        	[
        		'cate_name'=>'Máy xay',
        		'cate_slug'=>str_slug('Máy xay')
        	],
        ];
        DB::table('category')->insert($data);
    }
}
