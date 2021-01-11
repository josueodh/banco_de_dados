@extends('layouts.master')

@section('content')
    @component('components.create')
        @slot('title','Cadastrar Autor')
        @slot('back', url()->previous())
        @slot('store', route('authors.store'))
        @slot('form')
            @include('authors.form')
        @endslot

    @endcomponent
@endsection
