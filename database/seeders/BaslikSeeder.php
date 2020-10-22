<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class BaslikSeeder extends Seeder
{
    public function run()
    {
        $fake=FAKER::create();
        for ($i=0; $i < 100; $i++) { 
            DB::Table('basliks')->insert([
                'bname'=>$fake->word,
                'bhakkinda'=>$fake->text,
                'btur'=>$fake->randomDigit,
                'uid'=>$fake->numberBetween($min=0,$max=200),
                'updated_at'=>$fake->dateTime,
                'created_at'=>$fake->dateTime,
            ]);
        }        
    }
}
