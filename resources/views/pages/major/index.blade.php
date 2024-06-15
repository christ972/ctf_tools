@extends('layouts.admin')

@section('title', 'Majors')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Departement</li>
    
@endsection

@section('content')

    <!-- DataTables Latest Majors -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                {{-- label-group --}}
                <div class="label-group">

                    <i class="fas fa-table"></i> Derniers Departement  

                </div>
                {{-- /label-group --}}

                <a href="{{ route('major.create') }}" class="btn btn-primary btn-sm">Ajouter</a>

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

                        @foreach ($majors as $major)

                            <tr>

                                <td>{{ $major->name }}</td>
                                <td>{{ $major->created_at }}</td>
                                <td>{{ $major->updated_at }}</td>
                                <td>

                                    <form action="{{ route('major.destroy', $major->id) }}" method="post">

                                        {{ csrf_field() }}
                                
                                        {{-- Button Edit Major --}}
                                        <a href="{{ route('major.edit', $major->id) }}" class="btn btn-primary btn-sm">

                                            Editer

                                        </a>
                                        
                                        {{-- Button Edit Major --}}
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
        {{-- card-body --}}

    </div>

@endsection