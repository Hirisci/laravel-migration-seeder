<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   

        for($i=0; $i<=50; $i++){

            $train = new Train();
            $train->agency = $faker->company() ;
            $train->departure_station= $faker->city();
            $train->arrival_station= $faker->city();
            
            //Start point of our date range.
            $start = strtotime("10 may 2022");
            
            //End point of our date range.
            $end = strtotime("22 december 2022");

            //Custom range.
            $timestamp = mt_rand($start, $end);
            
            //Print it out.               
            $train->departure_time=   date("Y-m-d", $timestamp);
            $train->arrival_time= date("Y-m-d", $timestamp) ;
            $train->code_train= $faker->postcode() ;
            $train->carriages= rand(4,10);
            $train->save();
        }
    }
}
