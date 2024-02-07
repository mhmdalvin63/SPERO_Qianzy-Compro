<?php

namespace App\Http\Controllers;

use App\Models\Wedo;
use Illuminate\Http\Request;

class WedoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Wedo = Wedo::all();
        return view('BackEnd.Wedo.index', compact('Wedo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Wedo = Wedo::all();
        return view('BackEnd.Wedo.create', compact('Wedo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'icon_wedo' => 'required',
            'judul_wedo' => 'required',
            'deskripsi_wedo' => 'required',
        ]);

        // $gambar_wedo = $request->file('gambar_wedo');
        // $gambar_wedo->storeAs('public/image', $gambar_wedo->hashName());

        wedo::create([
            'icon_wedo' => $request->icon_wedo,
            'judul_wedo' => $request->judul_wedo,
            'deskripsi_wedo' => $request->deskripsi_wedo,
        ]);
        // wedo::create($request->all());
        return redirect('admin/wedo')->with('success','Data Pemesanan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wedo $wedo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Wedo = Wedo::find($id);
        return view('BackEnd.Wedo.edit', compact('Wedo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'icon_wedo' => '',
            'judul_wedo' => '',
            'deskripsi_wedo' => '',
        ]);

       $Wedo = Wedo::findOrfail($id);
           $Wedo->update([
            'icon_wedo' => $request->icon_wedo,
            'judul_wedo' => $request->judul_wedo,
            'deskripsi_wedo' => $request->deskripsi_wedo,
            ]);
        return redirect()->route('admin.wedo_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Wedo = Wedo::findOrfail($id);
        $Wedo->delete();
        return redirect()->route('admin.wedo_index')->with('success', 'Data deleted successfully');
    }
}
