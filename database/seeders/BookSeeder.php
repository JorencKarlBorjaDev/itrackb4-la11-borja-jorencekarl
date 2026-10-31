<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $a = Genre::create(['name' => 'Fiction']);
        $b = Genre::create(['name' => 'Fantasy']);
        $c = Genre::create(['name' => 'Historical Fiction']);

        Book::create([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'year' => 1937,
            'is_available' => true,
            'genre_id' => $b->id,
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'year' => 1813,
            'is_available' => true,
            'genre_id' => $a->id,
        ]);

        Book::create([
            'title' => 'Noli Me Tangere',
            'author' => 'Jose Rizal',
            'year' => 1887,
            'is_available' => true,
            'genre_id' => $c->id,
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'year' => 1925,
            'is_available' => true,
            'genre_id' => $a->id,
        ]);

        Book::create([
            'title' => 'Alice in Wonderland',
            'author' => 'Lewis Carroll',
            'year' => 1865,
            'is_available' => true,
            'genre_id' => $b->id,
        ]);
    }
}