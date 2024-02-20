<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Songs::all();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'album_id' => 'required',
            'name' => 'required',
            'duration' => 'required',
            'order' => 'required'
        ]);

        $song = new Song();
        $song->album_id = $request->input('album_id');
        $song->name = $request->input('name');
        $song->duration = $request->input('duration');
        $song->order = $request->input('order');
        $song->save();

        return redirect()->route('article.index')->with('success', 'Artículo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Songs $songs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Songs $songs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Songs $songs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Songs $songs)
    {
        //
    }
}
