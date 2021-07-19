<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TimelineController extends Controller
{
    public function timelineView()
    {
       $tweets = Tweet::all();
       return view ('timeline',[
         'tweets' => $tweets,
       ]);
    }

    public function TweetPost(Request $request)
    {
      $tweet = $request->tweet;

      Tweet::create([
        'tweet' => $tweet,
      ]);

      return redirect()->route('timeline');
    }
}
