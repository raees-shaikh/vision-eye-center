<?php

/**
 * Default date time format
 */

use Illuminate\Support\Facades\Cache;

if (!function_exists('dd_format')) {
    function dd_format($value, $format = 'd-m-Y h:i a')
    {
        return date($format, strtotime($value));
    }
}

function getReviews()
{
    $cacheKey = 'review_data';

    $data =    Cache::get($cacheKey);

    if (!$data) {
        // $url = 'https://maps.googleapis.com/maps/api/place/details/json?placeid=' . config('app.placeId') . '&key=' . config('app.googleApiKey');
        $url = url('/reviews.json');

        $response = Http::get($url)->json();
        // dd($response);
        $result = $response['result'];

        $data = [
            "reviews" => $result['reviews'],
            "totalReviews" => $result['user_ratings_total'],
            "totalRating" => $result['rating']
        ];

        Cache::put($cacheKey, $data,  24 * 60 * 60);
    }
    return $data;
}

function getServices(){
    $services=['Cataract','LASIK','Cornea','Dry Eye Suit','Retina','Glaucoma','Squint'];
    return $services;
}
