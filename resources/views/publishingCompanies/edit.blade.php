@extends('layouts.master')

@section('content')
    @component('components.edit')
        @slot('title','Editar Categoria')
        @slot('back', url()->previous())
        @slot('update', route('publishingCompanies.update', $publishingCompany->id))
        @slot('form')
            @include('publishingCompanies.form')
        @endslot

    @endcomponent
@endsection
