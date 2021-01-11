@extends('layouts.master')

@section('content')
    @component('components.edit')
        @slot('title','Editar Livro')
        @slot('back', url()->previous())
        @slot('update', route('books.update', $book->id))
        @slot('form')
            @include('books.form')
        @endslot

    @endcomponent
@endsection
