@extends('layouts.master')

@section('content')
    @component('components.index')
        @slot('title','Categorias')
        @slot('create', route('categories.create'))
        @slot('header')
        <tr>
            <th>Nome</th>
            <th></th>
        </tr>
        @endslot
        @slot('body')
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td class="button-index">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <form class="form-delete" action="{{ route('categories.destroy', $category->id) }}" method="post">
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
