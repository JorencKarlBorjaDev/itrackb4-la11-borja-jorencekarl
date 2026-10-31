@extends('layouts.app')

@section('title', 'Book Details')

@section('content')

    <div class="card">
        <div class="card-body">

            <h1 class="card-title">Book Information</h1>

            <p><strong>ID:</strong> {{ $book['id'] }}</p>

            <p><strong>Title:</strong> {{ $book['title'] }}</p>

            <p><strong>Author:</strong> {{ $book['author'] }}</p>

            <p><strong>Year:</strong> {{ $book['year'] }}</p>

            <p><strong>Genre:</strong> {{ $book->genre?->name ?? 'N/A' }}</p>

            <p><strong>Name:</strong> Jorence Karl Borja</p>

            <a class="btn btn-primary"
               href="{{ route('books.index') }}">
                Back to Books
            </a>

        </div>
    </div>

@endsection