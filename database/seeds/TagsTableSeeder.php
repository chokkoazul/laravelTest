<?php
/**
 * Created by PhpStorm.
 * User: cosorio
 * Date: 02-08-15
 * Time: 07:17 PM
 */
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder{



    public function run(){
        $faker = Faker::create();

        for($i=0;$i < 30;$i ++){


            \DB::table('tags')->insert(
                array(
                    'name'  => $faker->name,
                    'description'  => $faker->paragraph
                )
            );

        }

    }
}