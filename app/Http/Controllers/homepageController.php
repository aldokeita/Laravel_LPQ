<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\kategori;
use App\Models\news;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index() {
        return view('homepage.index');
    }
    public function news() {
        return view('homepage.page.news',[
            'news'=> news::all(),
            'kategori'=> categories::all()
        ]);
    }
    public function detail(news $news) {
        // $detail = news::firstWhere('id',$id);
        // dd($news);
        return view('homepage.page.details',[
            'detail'=> $news
        ]);
    }
    public function aboutus() {
        return view('homepage.page.aboutus');
    }
    public function contactus() {
        return view('homepage.page.contactus');
    }
}
