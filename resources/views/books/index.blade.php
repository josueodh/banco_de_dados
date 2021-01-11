@extends('layouts.master')

@section('content')
    @component('components.index')
        @slot('title','Livros')
        @slot('create', route('books.create'))
        @slot('header')
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Preço</th>
            <th>Publicação</th>
            <th></th>
        </tr>
        @endslot
        @slot('body')
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->publishingCompany->name }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ date('d/m/Y', strtotime($book->publishing)) }}</td>
                    <td class="button-index">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <form class="form-delete" action="{{ route('books.destroy', $book->id) }}" method="post">
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
