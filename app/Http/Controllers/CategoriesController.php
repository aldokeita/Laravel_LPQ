<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.page.news.category',[
            'categories'=>categories::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page.news.addcat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'category' => 'required',
        ]);

        $cateogries = new categories;
        $cateogries->category = $request->category;

        $cateogries->save();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('category.index')->with('success', 'News created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $category)
    {
            $category->delete($category->id);

            return redirect()->route('category.index')->with('success', "Category ($category->category) deleted successfully.");
    }
}
