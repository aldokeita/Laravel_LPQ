<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kelas::all()
        ->groupBy('kelas');
        // dd($data);
        return view('dashboard.page.kelas.index',[
            'title'=>'Kelas',
            'Datas'=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page.kelas.add',[
            'title'=>'Kelas',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datavalidation = $request->validate([
            'kelas' => 'required|max:255',
        ]);

        kelas::create($datavalidation);

        return redirect()->route('kelas.index')->with('success','Kelas Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data = kelas::find($id);
        $jadwalsiswa = kelas::whereNotNull('siswa_id')
        ->where('kelas',$data->kelas)
        ->get();
        // $filter=[];
        // foreach($jadwalsiswa as $x){
        //     $filter[] = ['id','!=',$x->siswa_id];
        // }
        // $siswa = siswa::where($filter)->get();

        // dd($jadwalsiswa);
        return view('dashboard.page.kelas.show',[
            'title'=>'Detail kelas',
            'data'=>$data,
            'siswa'=>$jadwalsiswa,
            'listsiswa'=>siswa::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Kelas::where('kelas',$request->kelas)->delete();

            return redirect()->route('kelas.index');
        } catch (ValidationException $e) {
            // Tangani pengecualian jika terjadi kesalahan validasi
            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            // Tangani pengecualian jika terjadi kesalahan database
            return back()->withErrors(['error' => 'Database error.'])->withInput();
        } catch (\Exception $e) {
            // Tangani pengecualian umum
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    public function addsiswakelas(Request $request){
        try {
            $datavalidation = $request->validate([
                'kelas' => 'required',
                'siswa_id' => 'required',
            ]);

            Kelas::create($datavalidation);

            return redirect()->route('kelas.show', $request->idkelas);
        } catch (ValidationException $e) {
            // Tangani pengecualian jika terjadi kesalahan validasi
            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            // Tangani pengecualian jika terjadi kesalahan database
            return back()->withErrors(['error' => 'Database error.'])->withInput();
        } catch (\Exception $e) {
            // Tangani pengecualian umum
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }

    }
    public function deletesiswakelas(Request $request){
        try {

            Kelas::destroy($request->id);

            return redirect()->route('kelas.show', $request->idkelas);
        } catch (ValidationException $e) {
            // Tangani pengecualian jika terjadi kesalahan validasi
            return back()->withErrors($e->errors())->withInput();
        } catch (QueryException $e) {
            // Tangani pengecualian jika terjadi kesalahan database
            return back()->withErrors(['error' => 'Database error.'])->withInput();
        } catch (\Exception $e) {
            // Tangani pengecualian umum
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }

    }
}
