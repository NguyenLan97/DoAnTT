<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'email'=>'nguyenlan@gmail.com',
        		'password'=>bcrypt('123456'),
        		'full_name'=>'NguyenLan',
        		'is_admin'=>1
        	],
        ];
        DB::table('users')->insert($data);
    }
}
