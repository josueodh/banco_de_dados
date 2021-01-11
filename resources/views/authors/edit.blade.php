@extends('layouts.master')

@section('content')
    @component('components.edit')
        @slot('title','Editar Autor')
        @slot('back', url()->previous())
        @slot('update', route('authors.update', $author->id))
        @slot('form')
            @include('authors.form')
        @endslot

    @endcomponent
@endsection
