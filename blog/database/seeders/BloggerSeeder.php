<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blogger::factory()->create([
            'name' => 'Abc',
            'gender' => 'male',
            'dob' => '2000-01-01',
            'address' => 'Dhaka',
            'email' => 'abc@gmail.com',
            'status' => 'Approved',
            'username' => 'abc',
            'password' => md5('abc'),
            'otp' => Null,
            'image' => 'index.png',
            'created_at' => '2022-05-23 02:24:08',
            'updated_at' => '2022-05-23 02:24:08'

        ]);
     
    }
}
