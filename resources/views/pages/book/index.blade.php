@extends('layouts.admin')

@section('title', 'Books')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Livres</li>

@endsection

@section('content')

    <!-- DataTables Latest Books -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between">

                {{-- group --}}
                <div class="group">

                    <i class="fas fa-table"></i> Derniers Livres  

                </div>
                {{-- /group --}}

                <a href="{{ route('book.create') }}" class="btn btn-primary btn-sm">Ajouter</a>

            </div>

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            {{-- table-responsive --}}
            <div class="table-responsive">

                {{-- table --}}
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">

                    {{-- thead --}}
                    <thead>

                        <tr>

                            <th>Nom</th>
                            <th>Categorie</th>
                            <th>Auteur</th>
                            <th>Editeur</th>
                            <th>Type de Livre</th>
                            <th>Action</th>

                        </tr>

                    </thead>
                    {{-- /thead --}}

                    {{-- tfoot --}}
                    <tfoot>

                        <tr>
                            
                            <th>Nom</th>
                            <th>Categorie</th>
                            <th>Auteur</th>
                            <th>Editeur</th>
                            <th>Type de Livre</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    {{-- /tfoot --}}

                    {{-- tbody --}}
                    <tbody>

                        @foreach ($books as $book)
                            
                            <tr>
                                
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->category->name }}</td>
                                <td>{{ $book->author->name }}</td>
                                <td>{{ $book->publisher->name }}</td>
                                <td>{{ $book->case->name }}</td>
                                <td>

                                    <form action="{{ route('book.destroy', $book->id) }}" method="post">

                                        {{ csrf_field() }}

                                        {{-- Button Edit Book --}}
                                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-primary btn-sm">
                                        
                                            Editer

                                        </a>
                                    
                                        {{-- Button Delete Book --}}
                                        <button type="submit" class="btn btn-danger btn-sm">

                                            Supprimer

                                        </button>

                                    </form>

                                </td>
                                
                            </tr>

                        @endforeach

                    </tbody>
                    {{-- /tbody --}}

                </table>
                {{-- /table --}}

            </div>
            {{-- /table-responsive --}}

        </div>
        {{-- /card-body --}}

    </div>

@endsection