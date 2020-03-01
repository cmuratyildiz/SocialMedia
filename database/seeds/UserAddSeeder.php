<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([


            'name'=>'Çağatay Murat',
            'lastname'=>' YILDIZ',
            'email'=>'cagatay@hotmail.com',
            'password'=>bcrypt(123),
            'image' =>'asdas',
            'status' =>1

        ]);
    }
}
