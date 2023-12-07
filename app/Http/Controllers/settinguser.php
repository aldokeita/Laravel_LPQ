<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use app\Models\User;
use app\Models\siswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class settinguser extends Controller
{
    public function index()  {
        return view('dashboard.page.setting',[
            'data'=> user::find(auth()->user()->id),
        ]);
    }
    public function update(Request $request){
        $request->validate([
            'oldpass'=>'required',
            'newpass'=>'required',
            'id'=>'required',
        ]);

        $cek = Auth::user();
        if(!Hash::check($request->oldpass, $cek->password)){
            // dd('tidak sama');
            return redirect()->route('setting')->with(['error' => 'Password lama tidak sesuai.']);
        }else{
            // dd('sama');
            // Hash password baru
            $newPassword = Hash::make($request->newpass);

            // Perbarui password pengguna
            $user= user::find($request->id);
            $user->password = $newPassword;
            $user->save();
            return redirect()->route('setting')->with('success', 'Password berhasil diperbarui.');
        }
    }
}
