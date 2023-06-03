<?php

namespace App\Http\Controllers;

use App\Models\Records;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
//        $call = Http::get('https://api.themoviedb.org/3/discover/movie', [
//            'api_key' => env('TMDB_API_KEY'),
//            'page' => 1
//        ]);
        //$apiResponse = json_decode($call, true);
        $apiResponse =  '{
  "page": 1,
  "results": [
    {

      "id": 603692,
      "original_language": "en",
      "original_title": "John Wick: Chapter 4",

      "popularity": 5688.839,
      "poster_path": "/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg",
      "release_date": "2023-03-22",
      "title": "John Wick: Chapter 4",
    },
  ],
  "total_pages": 38566,
  "total_results": 771317
}';
        $apiResponse = array(
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22')
          );

        return Inertia::render('Movies/Index', [
            'movies' => $apiResponse,
        ]);
    }

    /**
     * @return Response
     */
    public function search(Request $request) : Response
    {
//        $query = $request->get('search');
//        $url = empty($query) ? 'https://api.themoviedb.org/3/discover/movie' : 'https://api.themoviedb.org/3/search/movie';
//
//        $call = Http::get($url, [
//            'api_key' => env('TMDB_API_KEY'),
//            'query' => $query,
//            'page' => 1
//        ]);

//        $apiResponse = json_decode($call, true);
        $apiResponse = array(
            array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22'),
          array('title'=>'John Wick: Chapter 4', 'poster_path' => '/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg', 'release_date'=>'2023-03-22')
          );

        return Inertia::render('Movies/Index', [
            'movies' => $apiResponse['results'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Records $records)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Records $records)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Records $records)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Records $records)
    {
        //
    }
}
