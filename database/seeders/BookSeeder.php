<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'year' => 1937,
            'genre' => 'Fiction',
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'year' => 1813,
            'genre' => 'Fiction',
        ]);

        Book::create([
            'title' => 'Noli Me Tangere',
            'author' => 'Jose Rizal',
            'year' => 1887,
            'genre' => 'Fiction',
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'year' => 1925,
            'genre' => 'Fiction',
        ]);

        Book::create([
            'title' => 'Alice in Wonderland',
            'author' => 'Lewis Carroll',
            'year' => 1865,
            'genre' => 'Fiction',
        ]);
    }
}