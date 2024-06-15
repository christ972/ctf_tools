@extends('layouts.admin')

@section('title', 'Publishers')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Editeurs</li>

@endsection

@section('content')

    <!-- DataTables Latest Publishers -->
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                {{-- label-group --}}
                <div class="label-group">

                    <i class="fas fa-table"></i> Derniers Editeurs  

                </div>
                {{-- /label-group --}}

                <a href="{{ route('publisher.create') }}" class="btn btn-primary btn-sm">Add</a>

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
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Action</th>
              
                        </tr>

                    </thead>
                    {{-- /thead --}}

                    {{-- tfoot --}}
                    <tfoot>

                        <tr>

                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>
                    {{-- /tfoot --}}

                    {{-- tbody --}}
                    <tbody>

                        @foreach ($publishers as $publisher)

                            <tr>

                                <td>{{ $publisher->name }}</td>
                                <td>{{ $publisher->address }}</td>
                                <td>{{ $publisher->phone }}</td>
                                <td>

                                    <form action="{{ route('publisher.destroy', $publisher->id) }}" method="post">

                                        {{ csrf_field() }}

                                        {{-- Button Edit Publisher --}}
                                        <a href="{{ route('publisher.edit', $publisher->id) }}" class="btn btn-primary btn-sm">
                                            
                                            Editer

                                        </a>
                                    
                                        {{-- Button Delete Publisher --}}
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