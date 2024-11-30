<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Str;

class ProductSample extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_pham')->insert([
            'ten_san_pham' => Str::random(10),
            'mo_ta' => Str::random(10),
            'gia' => random_int(1,10),
            'ton_kho' => random_int(1,10),

        ]);
    }
}
