<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Painting;


class PaintingController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
        //$book is which you want the result coming to//
         $paintings = Painting::join('artists', 'artist_id', '=', 'artists.id')->select('paintings.id','title','publishedyear','image_url', 'artist_id')->get();
         return response()->json($paintings);
     }


     //$id is related the name of the route//
     public function getOne($id) {
        $painting = Painting::join('artists', 'artist_id', '=', 'artists.id')->select('paintings.id','title','publishedyear','image_url', 'artist_id')->where('paintings.id', '=', $id)->get();
         return response()->json($painting);
     }


    //  public function save(Request $request) {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'artist_id' => 'required',
    //         'publishedyear' => 'required|numeric',
    //         'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
    //     ]);

    //     if ($request->hasFile('image_url')) {
    //         $file = $request->file('image_url');
    //         $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
    //         $imagePath = $file->storeAs('images', $filename, 'public');
    //      } else {
    //          return response()->json(['error' => 'Image upload failed'], 400);
    //      }

    //      $painting = Painting::create([
    //          'title' => $request->title,
    //          'artist_id' => $request->artist_id,
    //          'publishedyear' => $request->publishedyear,
    //          'image_url' => $imagePath
    //      ]);

    //      return response()->json($painting, 201);
    // }

    // public function update(Request $request, $id) {
    //     $painting = Painting::findOrFail($id);
    
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'artist_id' => 'required',
    //         'publishedyear' => 'required|numeric',
    //         'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
    //     ]);
    //     $painting->update($request->all());
    //     return response()->json($painting);
    // }
    
    
    // public function delete($id) {
    //     $painting = Painting::findOrFail($id);
    //     $painting->delete();
    //     return response()->json(null, 204);

    //     //no reture, so it null, 204 (successful status code)
    // }
    
}
