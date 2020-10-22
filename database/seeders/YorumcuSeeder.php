<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class YorumcuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake=Faker::create();
        for ($i=0; $i <100 ; $i++) { 
            DB::table('yorumcus')->
            insert(
                [
                    'unick'=>$fake->name,
                    'uemail'=>$fake->email,
                    'upass'=>md5($fake->password),
                    'usex'=>$fake->randomElement($array=array('k','e')),
                    'urole'=>$fake->randomElement($array=array('a','u')),
                    'vukuatlari'=>'yok',
                   'updated_at'=>$fake->dateTime,
                  'created_at'=>$fake->dateTime,
                ]);
        }
    }
}
