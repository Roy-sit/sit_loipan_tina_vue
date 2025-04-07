<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Artist;


class ArtistController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getAll() {
        $artists = Artist::all();
        return response()->json($artists);
    }

     //$id is related the name of the route//
     public function getOne($id) {
        $artist = Artist::select('name','lifedates','background')->where('artists.id', '=', $id)->get();
         return response()->json($artist);
     }


}
