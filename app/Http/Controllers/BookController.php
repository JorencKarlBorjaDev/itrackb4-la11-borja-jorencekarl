<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;


class BookController extends Controller
{
    
   public function index(Request $request)
   {
       $genreId = $request->query('genre_id');
       $year = $request->query('year');

       $genres = Genre::all();
      
       
       $query = Book::with('genre');

     if ($genreId !== null) {
        $query->where('genre_id', $genreId);
    }

     if ($year !== null) {
        $query->where('year', $year);
    }

        $books = $query->get();

        return view('books.index', compact('books', 'genreId', 'year', 'genres'));
    }

    
    public function create()
    {
        $genres = Genre::all();

        return view('books.create', compact('genres'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'year' => 'required|numeric|min:1000|max:2026',
        'genre_id' => 'required|exists:genres,id',
        'is_available' => 'required|boolean',
    ]);

     
    Book::create($validated);

    return redirect()->route('books.index')
        ->with('success', 'Book added successfully!');
    }
    
    
    public function show(string $id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', compact('book'));
    }
    
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
    
    public function destroy(string $id)
    {
        //
    }
   public function featured()
    {
         $book = Book::findOrFail(1);

        return view('books.featured', compact('book'));
    }
    
   
   
}

