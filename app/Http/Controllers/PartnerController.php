<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Partner = Partner::all();
        return view('BackEnd.Partner.index', compact('Partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Partner = Partner::all();
        return view('BackEnd.Partner.create', compact('Partner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_partner' => 'required|image|mimes:jpeg,jpg,png,webp',
        ]);

        $gambar_partner = $request->file('gambar_partner');
        $gambar_partner->storeAs('public/image', $gambar_partner->hashName());

        Partner::create([
            'gambar_partner' => $gambar_partner->hashName(),
        ]);
        // Partner::create($request->all());
        return redirect('admin/partner')->with('success','Data Pemesanan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Partner = Partner::find($id);
        return view('BackEnd.Partner.edit', compact('Partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_partner' => '|image|mimes:jpeg,jpg,png,webp',
        ]);

        $Partner = Partner::findOrfail($id);
        if ($request->hasFile('gambar_partner')) {

            $gambar_partner = $request->file('gambar_partner');
            $gambar_partner->storeAs('public/image', $gambar_partner->hashName());

            Storage::delete('public/image/'.$Partner->gambar_Partner);

            $Partner->update([
                'gambar_partner' => $gambar_partner->hashName(),
            ]);
        }else{
            $Partner->update([
                
            ]);
        }
        return redirect()->route('admin.partner_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Partner = Partner::findOrfail($id);
        Storage::delete('public/image'.$Partner->gambar_partner);
        $Partner->delete();
        return redirect()->route('admin.partner_index')->with('success', 'Data deleted successfully');
    }
}
