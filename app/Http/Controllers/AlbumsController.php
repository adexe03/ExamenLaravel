<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Albums::all();
        return view('albums.index', compact('albums'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Albums $albums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Albums $albums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Albums $albums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id = null)
    {
        $albums = Albums::find($id);
        if ($albums) {
            $albums->delete();
            return redirect()->route('albums.index')->with('success', 'El albúm se ha eliminado correctamente');
        } else {
            return redirect()->route('albums.index')->with('error', 'Error al eliminar el album');
        }
    }
}
