<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;

class DnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.page.news.news',[
            'news'=>news::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page.news.addnews',[
            'category'=>categories::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi data dari formulir
         $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|exists:categories,id',
            'content' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data ke dalam database
        $news = new News;
        $news->title = $request->title;
        $news->category_id = $request->category;
        $news->content = $request->content;
        $news->user_id = auth::id();

        // Proses upload foto
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos');
            $news->photo = $photoPath;
        }

        $news->save();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('news.create')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard.page.news.detailnews',[
            'news'=>news::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.page.news.edit',[
            'news'=>news::find($id),
            'kategori'=>categories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('photo')) {
            if($request->oldphoto){
                Storage::delete($request->oldphoto);
            }
            $photoPath = $request->file('photo')->store('photos');
            $validate['photo'] = $photoPath;
        }
        news::where('id',$id)
               ->update($validate);

        // Proses upload foto

         return redirect()->route('news.show',$id)->with('success', 'News Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        try {
            // $news = $news->id; // Get the ID of the item
            Storage::delete($news->photo);
            $news->delete($news->id);

            return redirect()->route('news.index')->with('success', "Item (ID: $news->id) deleted successfully.");
        } catch (ModelNotFoundException $e) {
            // Handle the case where the item is not found
            return redirect()->route('news.index')->with('error', 'News not found.');
        } catch (\Exception $e) {
            // Handle other exceptions that might occur during deletion
            return redirect()->route('news.index')->with('error', 'Failed to delete News. Please try again.');
        }
    }
}
