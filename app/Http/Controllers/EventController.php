<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Event = Event::all();
        return view('BackEnd.Event.index', compact('Event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Event = Event::all();
        return view('BackEnd.Event.create', compact('Event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_event' => 'required|image|mimes:jpeg,jpg,png,webp',
            'judul_event' => 'required',
            'subjudul_event' => 'required',
            'deskripsi_event' => 'required',
        ]);

        $gambar_event = $request->file('gambar_event');
        $gambar_event->storeAs('public/image', $gambar_event->hashName());

        Event::create([
            'gambar_event' => $gambar_event->hashName(),
            'judul_event' => $request->judul_event,
            'subjudul_event' => $request->subjudul_event,
            'deskripsi_event' => $request->deskripsi_event,
        ]);
        // event::create($request->all());
        return redirect('admin/event')->with('success','Data Pemesanan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Event = Event::find($id);
        return view('BackEnd.Event.edit', compact('Event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar_event' => '|image|mimes:jpeg,jpg,png,webp',
            'judul_event' => '',
            'subjudul_event' => '',
            'deskripsi_event' => '',
        ]);

        $Event = Event::findOrfail($id);
        if ($request->hasFile('gambar_event')) {

            $gambar_event = $request->file('gambar_event');
            $gambar_event->storeAs('public/image', $gambar_event->hashName());

            Storage::delete('public/image/'.$Event->gambar_event);

            $Event->update([
                'gambar_event' => $gambar_event->hashName(),
                'judul_event' => $request->judul_event,
                'subjudul_event' => $request->subjudul_event,
                'deskripsi_event' => $request->deskripsi_event,
            ]);
        }else{
            $Event->update([
                'judul_event' => $request->judul_event,
                'subjudul_event' => $request->subjudul_event,
                'deskripsi_event' => $request->deskripsi_event,
            ]);
        }
        return redirect()->route('admin.event_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Event = Event::findOrfail($id);
        Storage::delete('public/image'.$Event->gambar_event);
        $Event->delete();
        return redirect()->route('admin.event_index')->with('success', 'Data deleted successfully');
    }
}
