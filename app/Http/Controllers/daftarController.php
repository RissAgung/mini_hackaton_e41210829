<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class daftarController extends Controller
{

  public function showEdit($dataUrl)
  {
    $data = Daftar::find($dataUrl);
    $finalData = $data->toArray();


    return view('edit_data', compact('finalData'));
  }

  public function edit_data(Request $request)
  {
    Daftar::where('nama', '=', $request->nama)->update([
      'nama' => $request->nama,
      'nim' => $request->nim,
      'prodi' => $request->prodi,
      'angkatan' => $request->angkatan,
      'cabang_olahraga' => $request->olahraga,
    ]);

    return redirect()->route('dashboard');
  }

  public function deleteData($id)
  {
    Daftar::find($id)->delete();
    return redirect()->route('dashboard');
  }

  public function submitDaftar(Request $request)
  {

    $dataDaftar = $request->validate([
      'nama' => 'required',
      'nim' => 'required',
      'prodi' => 'required',
      'angkatan' => 'required',
      'olahraga' => 'required',
    ]);

    $kode_daftar = str_shuffle(date('YmdHis') . 'DFT');

    Daftar::create([
      'kode_daftar' => $kode_daftar,
      'nama' => $request->nama,
      'nim' => $request->nim,
      'prodi' => $request->prodi,
      'angkatan' => $request->angkatan,
      'cabang_olahraga' => $request->olahraga,
    ]);

    return redirect()->route('dashboard');
  }
}
