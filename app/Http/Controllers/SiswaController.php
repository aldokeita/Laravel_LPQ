<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use Carbon\Carbon;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.page.siswa.siswa',[
            'siswa'=>siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page.siswa.addsiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user= new User;
        $user->name =$request->nama;
        $user->email =$request->email;
        $user->role ='siswa';
        $user->password = bcrypt('password');
        $user->save();

        // dd($request);
        $siswa= new siswa;
        $siswa->nama =$request->nama;
        $siswa->email =$request->email;
        $siswa->nis =$request->nis;
        $siswa->alamat =$request->alamat;

        $siswa->tanggal_lahir =$request->tanggal_lahir;

        $siswa->jenis_kelamin =$request->jenis_kelamin;
        $siswa->user_id = User::where('email',$request->email)->first()->id;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesiswaRequest $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        $siswa = Siswa::findOrFail($siswa->id);

        // Menghapus siswa
        $siswa->delete();

        // Menghapus user yang terkait (jika ada)
        if ($siswa->user) {
            $siswa->user->delete();
        }

        return redirect()->back();
    }
}
