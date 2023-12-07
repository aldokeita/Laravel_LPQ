<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\jadwal;
use App\Models\news;
use App\Models\User;
use App\Models\infaq;

class dashboard extends Controller
{
    public function index(){
        if(auth()->user()->role == 'siswa'){
            $kelas = kelas::
            get()
            ->groupBy('kelas');
            // dd($data);
            return view('dashboard.page.dashboard_siswa',[
                'kelas' => $kelas,
                'jadwal'=> jadwal::all(),
                'infaq'=> infaq::where('payment',true)->get(),
                'infaqmustpayment'=> infaq::where('payment',false)->get()
            ]);
        }else{

            $kelas = kelas::all()
            ->groupBy('kelas');
            // dd($data);

            return view('dashboard.page.dashboard_admin',[
                'siswa' => siswa::all(),
                'kelas' => $kelas,
                'jadwal'=> jadwal::all(),
                'category'=>categories::all(),
                'news'=>news::all(),
                'publisher'=> user::where('role','!=','siswa')->get(),
                'infaq'=> infaq::where('payment',true)->get(),
                'infaqmustpayment'=> infaq::where('payment',false)->get()
            ]);
        }
    }
}
