<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;
use Illuminate\Support\Facades\Auth;

class CatatanController extends Controller {
    public function index() {
        $catatans = Catatan::where('user_id', Auth::id())->get();
        return view('catatan/index', compact('catatans'));
    }

    public function create() {
        return view('catatan/create');
    }

    public function store(Request $request) {
        $data = $this->validate($request, [
            'tanggal'   => 'required',
            'waktu'     => 'required',
            'lokasi'    => 'required',
            'suhu'      => 'required|numeric|max:40'
        ]);


        $catatan = Catatan::create([
            'user_id'   => Auth::id(),
            'tanggal'   => $request->tanggal,
            'waktu'     => $request->waktu,
            'lokasi'    => $request->lokasi,
            'suhu'      => $request->suhu
        ]);

        if($catatan){
            // jika catatan berhasil masuk db
            return redirect()->route('catatan.index')->with(['berhasil' => 'Data berhasil disimpan!']);
        }else{
            // jika gagal
            return redirect()->route('catatan.index')->with(['gagal' => 'Data gagal disimpan!']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $catatan = Catatan::findOrFail($id);
        return view('catatan/edit', compact('catatan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal'   => 'required',
            'waktu'     => 'required',
            'lokasi'    => 'required',
            'suhu'      => 'required|numeric|max:40'
        ]);

        $catatan = Catatan::findOrFail($id);
        $catatan->update([
            'tanggal'   => $request->tanggal,
            'waktu'     => $request->waktu,
            'lokasi'    => $request->lokasi,
            'suhu'      => $request->suhu
        ]);

        if($catatan){
            // jika catatan berhasil diubah
            return redirect()->route('catatan.index')->with(['berhasil' => 'Data berhasil diubah!']);
        }else{
            // jika gagal
            return redirect()->route('catatan.index')->with(['gagal' => 'Data gagal diubah!']);
        }
    }

    public function destroy($id)
    {
        $catatan = Catatan::findOrFail($id);
        $catatan->delete();

        if($catatan){
            // jika berhasil dihapus
            return redirect()->route('catatan.index')->with(['berhasil' => 'Data berhasil dihapus!']);
        }else{
            // jika gagal
            return redirect()->route('catatan.index')->with(['gagal' => 'Data gagal dihapus!']);
        }
    }
}
