<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                'name'      => 'Hasudungan',
                'email'     => 'hasudungan@gmail.com',
                'password'  => bcrypt('admin01'),
                'post_id'   => null,  
            ],
            [
                'name'      => 'Satrio Kuncoro',
                'email'     => 'satrioKuncoro@gmail.com',
                'password'  => bcrypt('satrioKun!!!'),
                'post_id'   => 1,  
            ],
            [
                'name'      => 'Arief Cendana',
                'email'     => 'ariefCendana@gmail.com',
                'password'  => bcrypt('ariefCendana!!!'),
                'post_id'   => 2,  
            ]
        ];

        User::insert($users);
    }
}
