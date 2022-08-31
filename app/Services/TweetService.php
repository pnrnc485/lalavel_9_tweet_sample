<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('created_at', 'DESC')->get(); // クエリでのソート（なるべくこちらを使ったほうが高速で負担もかからない）
        // $tweets = Tweet::all()->sortByDesc('created_at'); // PHPでのソート
    }
}
