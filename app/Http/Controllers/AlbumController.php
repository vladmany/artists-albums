<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\AlbumArtist;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = Album::insert([
            'name' => $request->get('name'),
            'tracks_count' => $request->get('tracks_count'),
        ]);

//        AlbumArtist::insert([
//           'album_id' => $album->id,
//           'artist_id' => $request->get('artist_id')
//        ]);

        return redirect(url("/albums/" . $request->get('artist_id')));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::where(['id' => $id])->first();

        return view('pages.albums', [
            'artist' => Artist::where(['id' => $id])->first(),
            'albums' => $artist->albums
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
