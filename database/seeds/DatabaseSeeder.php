<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Add default admin
        $data=[
            [
                'email'    => 'admin@kitchenart.vn',
                'password' => bcrypt('123456'),
                'level'    => 99,
                'full_name'=> 'Admin',
                'sex'      => 'Female',
                'age'      => 22,
                'address'  => 'Đông Anh, Hà Nội',
                'phone'    => '0123456789',
                'is_admin' => true
            ],
        ];
        DB::table('users')->insert($data);

        $this->call(CategoriesTableSeeder::class);
    }
}
