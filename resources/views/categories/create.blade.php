@extends('layouts.master')

@section('content')
    @component('components.create')
        @slot('title','Criar Categoria')
        @slot('back', url()->previous())
        @slot('store', route('categories.store'))
        @slot('form')
            @include('categories.form')
        @endslot

    @endcomponent
@endsection
