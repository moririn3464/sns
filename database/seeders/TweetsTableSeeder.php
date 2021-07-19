<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test_tweets = ['楽しい','うおおおおおおおおおおおお','abcdefg'];

        foreach($test_tweets as $test_tweet){
          DB::table('tweets')->insert([
            'tweet' => $test_tweet,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ]);
        }
    }
}
