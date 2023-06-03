<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display movies
     * @return Response
     */
    public function index(): Response
    {
        $call = Http::get('https://api.themoviedb.org/3/discover/movie', [
            'api_key' => env('TMDB_API_KEY'),
            'page' => 1
        ]);

        $apiResponse = json_decode($call, true);
        return Inertia::render('Movies/Index', [
            'movies' => $apiResponse['results'],
        ]);
    }

    /**
     * Searches for queries
     * @return Response
     */
    public function search(Request $request) : Response
    {
        $query = $request->get('search');
        $url = empty($query) ? 'https://api.themoviedb.org/3/discover/movie' : 'https://api.themoviedb.org/3/search/movie';

        $call = Http::get($url, [
            'api_key' => env('TMDB_API_KEY'),
            'query' => $query,
            'page' => 1
        ]);

        $apiResponse = json_decode($call, true);
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
    public function show(Movies $records)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movies $records)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movies $records)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movies $records)
    {
        //
    }
}
