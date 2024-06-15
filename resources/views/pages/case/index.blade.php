@extends('layouts.admin')

@section('title', 'Book Cases')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Type de livres</li>

@endsection

@section('content')

    <!-- DataTables Latest Book Cases -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between">

                {{-- group --}}
                <div class="group">

                    <i class="fas fa-table"></i> Derniers Salon de livres  

                </div>
                {{-- /group --}}

                <a href="{{ route('case.create') }}" class="btn btn-primary btn-sm">Ajouter</a>

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
                            <th>Creer</th>
                            <th>Mise a jour</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    {{-- /thead --}}

                    {{-- tfoot --}}
                    <tfoot>

                        <tr>

                            <th>Nom</th>
                            <th>Creer</th>
                            <th>Mise a jour</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    {{-- /tfoot --}}

                    {{-- tbody --}}
                    <tbody>

                        @foreach ($cases as $case)
                            
                            <tr>

                                <td>{{ $case->name }}</td>
                                <td>{{ $case->created_at }}</td>
                                <td>{{ $case->updated_at }}</td>
                                <td>

                                    <form action="{{ route('case.destroy', $case->id) }}" method="post">
                                    
                                        {{ csrf_field() }}

                                        {{-- Button Edit Book Case --}}
                                        <a href="{{ route('case.edit', $case->id) }}" class="btn btn-primary btn-sm">
                                        
                                            Editer
                                            
                                        </a>

                                        {{-- Button Delete Book Case --}}
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