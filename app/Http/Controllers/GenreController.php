<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection|Genre[]
     */
    public function index()
    {
        return Genre::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GenreRequest $request
     * @return Response
     */
    public function store(GenreRequest $request): Response
    {
        return Genre::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Genre $genre
     * @return Genre
     */
    public function show(Genre $genre): Genre
    {
        return $genre;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param GenreRequest $request
     * @param Genre $genre
     * @return bool
     */
    public function update(GenreRequest $request, Genre $genre): bool
    {
        return $genre->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Genre $genre
     * @return Response
     */
    public function destroy(Genre $genre): Response
    {
        $genre->delete();
        return response()->noContent(); // 204 - No Content
    }
}
