@extends('layouts.master')

@section('content')
    @component('components.create')
        @slot('title','Cadastrar Livro')
        @slot('back', url()->previous())
        @slot('store', route('books.store'))
        @slot('form')
            @include('books.form')
        @endslot

    @endcomponent
@endsection
