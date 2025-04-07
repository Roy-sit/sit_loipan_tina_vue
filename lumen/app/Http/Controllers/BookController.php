<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;


class BookController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
        //$book is which you want the result coming to//
         $books = Book::join('authors', 'author_id', '=', 'authors.id')->select('books.id','title','published_date','name')->orderBy('published_date', 'desc')->get();
         return response()->json($books);
     }


     //$id is related the name of the route//
     public function getOne($id) {
        $book = Book::join('authors', 'author_id', '=', 'authors.id')->select('books.id','title','book_image','published_date','name')->where('books.id', '=', $id)->get();
         return response()->json($book);
     }


     //there is a form somewhere, and bundle it up it $request//
     //validate = Lumen build-in function//
     //rules//
     //'email' => 'required|email'//
     public function save(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'author_id' => 'required',
            'published_date' => 'required|date',
            'book_image' => 'required'
        ]);
        //response to json, controller runnning a model called ::create = query INSERT//
        $book = Book::create($request->all());
        return response()->json($book, 201);
        //status code 201//
    }



    /* public function save(Request $request) {
         $this->validate($request, [
             'title' => 'required',
             'author_id' => 'required',
             'published_date' => 'required|date',
             'book_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
         ]);

         if ($request->hasFile('book_image')) {
            $file = $request->file('book_image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $imagePath = $file->storeAs('images', $filename, 'public');
         } else {
             return response()->json(['error' => 'Image upload failed'], 400);
         }

         $book = Book::create([
             'title' => $request->title,
             'author_id' => $request->author_id,
             'published_date' => $request->published_date,
             'book_image' => $imagePath
         ]);

         return response()->json($book, 201);
     } */
    

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        //find that book//
    
        $this->validate($request, [
            'title' => 'required',
            'author_id' => 'required',
            'published_date' => 'required|date',
            'book_image' => 'required'
        ]);
        $book->update($request->all());
        return response()->json($book);
    }
    
    
    public function delete($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);

        //no reture, so it null, 204 (successful status code)
    }
    
}
