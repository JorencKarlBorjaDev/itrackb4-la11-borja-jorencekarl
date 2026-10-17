<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
   public function index(Request $request)
   {
       $genre = $request->query('genre');
       $year = $request->query('year');

       $query = Book::query();

     if ($genre !== null) {
        $query->where('genre', $genre);
    }

     if ($year !== null) {
        $query->where('year', $year);
    }

        $books = $query->get();

        return view('books.index', compact('books', 'genre', 'year'));
    }

    
    public function create()
    {
        return view('books.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'year' => 'required|numeric|min:1000|max:2026',
        'genre' => 'required|in:History,Fiction',
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

