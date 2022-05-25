<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        // $books = config('books');
        // dump($books);

        //SELECT * FROM 'books'
        //$books = Book::all();

        //SELECT title FROM 'books'
        //$books = Book::select('title')->get();

        //SELECT * FROM books WHERE title <> 'il signore degli anelli'
        $books = Book::where( 'title', '<>', 'Il signore degli anelli' )->get();

        // dd( $books );

        //compact('books') = [ 'books' => $books ]
        return view( 'pages.book.index', compact('books') );
    }

    public function show($id){
        //recupera tutto l'array book
        //$books = config('books');
        // dump($books);
        //recuperare un solo dato dell'array globale
        //$book = $books[$id];
        //dump($book);
        //compact('books') = [ 'book' => $book ]

        $book = Book::findOrFail($id);

        return view( 'pages.book.show', compact('book') );
    }
}
