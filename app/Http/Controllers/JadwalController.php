<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kelas;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.page.jadwal.index',[
            'title'=>'jadwal',
            'Datas'=> jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page.jadwal.add',[
            'title'=>'Tambah Jadwal',
            'kelas'=>kelas::whereNull('siswa_id')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_akhir' => 'required|date_format:H:i|after:jam_mulai',
            'kelas_id' => 'required|numeric',
        ]);

        // Create a new instance of YourModel with the validated data
        jadwal::create($validatedData);

        // Redirect to a success page or any other action
        return redirect()->route('jadwal.index')->with('success', 'Data has been successfully stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        try {
            $jadwal = jadwal::findOrFail($jadwal->id);
            $jadwal->delete();

            return redirect()->route('jadwal.index')->with('success', 'Data has been successfully deleted.');
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
