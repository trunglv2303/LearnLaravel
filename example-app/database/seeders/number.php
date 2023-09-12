<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class number extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('number')->insert ([
            'username'=>'Trung2303',
            'email'=>'trunglv.22itb@vku.udn.vn ',
          'password'=>'1234',
        ]);
        DB::table('number')->insert([
                'username'=>'Trungle2303',
                'email'=>'leevantrung2303@gmail.com ',
              'password'=>'1234',
            ]);
    }
}