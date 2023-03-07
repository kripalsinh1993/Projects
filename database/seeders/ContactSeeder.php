<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'name'=>'lucky',
            'email'=>'lucky@gmail.com',
            'mobile'=>'9909082968',
            'subject'=>'contact data',
            'message'=>'hii i am lucky',
            'created_at'=>'2023-02-04',
            'updated_at'=>'2023-02-04'
        ]);
    }
}
