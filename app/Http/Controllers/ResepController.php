<?php

namespace App\Http\Controllers;

use App\Models\Apoteker;
use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function tambah(){
        return view('staff.crud.add', [
            'apotekers' => apoteker::all()
        ]);
    }

    public function store(Request $request){
        // Validate Input
        $validateData = $request->validate([
            'id_resep' => 'required|string|max:10',
            'nama_resep' => 'required|string',
            'nama_obat' => 'required|string',
            'jumlah_obat' => 'required|integer',
            'apoteker_id' => 'required'
        ]);


        Resep::create($validateData);

        session()->flash('success', 'Data Resep Berhasil Ditambah!');
        return redirect()->route('staff.resep');
    }

    public function edit($id){
        return view('staff.crud.edit',[
            'reseps' => resep::all()->where('id', $id)->first(),
            'apotekers' => apoteker::all(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'id_resep' => 'required|string|max:10',
            'nama_resep' => 'required|string',
            'nama_obat' => 'required|string',
            'jumlah_obat' => 'required|integer',
            'apoteker_id' => 'required'
        ]);

        $resep = Resep::findOrFail($id);
        $resep->update([
            'id_resep' => $request->id_resep,
            'nama_resep' => $request->nama_resep,
            'nama_obat' => $request->nama_obat,
            'jumlah_obat' => $request->jumlah_obat,
            'apoteker_id' => $request->apoteker_id,
        ]);

        session()->flash('success', 'Data Resep Berhasil Diubah!');
        return redirect()->route('staff.resep');
    }

    public function delete($id){
        $resep = Resep::findOrFail($id);
        $resep->delete();

        session()->flash('success', 'Data Resep Berhasil Dihapus!');
        return redirect()->route('staff.resep');
    }
}
