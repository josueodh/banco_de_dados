@extends('layouts.master')

@section('content')
    @component('components.create')
        @slot('title','Criar Editora')
        @slot('back', url()->previous())
        @slot('store', route('publishingCompanies.store'))
        @slot('form')
            @include('publishingCompanies.form')
        @endslot

    @endcomponent
@endsection
