@extends('layouts.master')

@section('content')
    @component('components.index')
        @slot('title','Editoras')
        @slot('create', route('publishingCompanies.create'))
        @slot('header')
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
        @endslot
        @slot('body')
            @foreach($publishingCompanies as $publishingCompany)
                <tr>
                    <td>{{ $publishingCompany->name }}</td>
                    <td class="button-index">
                        <a href="{{ route('publishingCompanies.edit', $publishingCompany->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <form class="form-delete" action="{{ route('publishingCompanies.destroy', $publishingCompany->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/delete.js') }}"></script>
@endpush
