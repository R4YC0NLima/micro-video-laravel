<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
//use Ramsey\Uuid\Uuid;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Category[]|Collection
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return Response
     */
    public function store(CategoryRequest $request): Response
    {
        return Category::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Category
     */
    public function show(Category $category): Category
    {
        return  $category;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return bool
     */
    public function update(CategoryRequest $request, Category $category): bool
    {
        return $category->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category): Response
    {
        $category->delete();
        return response()->noContent(); // 204 - No Content
    }
}
