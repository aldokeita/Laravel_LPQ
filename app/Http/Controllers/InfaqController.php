<?php

namespace App\Http\Controllers;

use App\Models\infaq;
use App\Models\siswa;
use Illuminate\Http\Request;

class InfaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.page.infaq.index',[
            'title'=>'Infaq',
            'Datas'=>infaq::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page.infaq.add',[
            'title'=>'Tambah Infaq',
            'Datas'=>siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $datavalidation = $request->validate([
            'siswa_id' => 'required',
            'nominal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
        ]);

        infaq::create($datavalidation);
        return redirect()->route('infaq.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(infaq $infaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(infaq $infaq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, infaq $infaq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(infaq $infaq)
    {
        infaq::destroy($infaq->id);
        return redirect()->route('infaq.index');
    }

    public function updatepaymentinfaq($id) {
        $data = infaq::find($id);
        $data->payment = True;
        $data->save();

        return redirect()->route('infaq.index');
    }
}
