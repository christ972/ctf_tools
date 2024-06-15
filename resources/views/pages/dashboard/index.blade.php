@extends('layouts.admin')

@section('title', 'Dashboard')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item active">Overview</li>

@endsection

@section('content')

  <!-- Icon Cards-->
  <div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">

      {{-- /card --}}
      <div class="card text-white bg-primary o-hidden h-100">

        {{-- card-header --}}
        <div class="card-header">

            Livres

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

          {{-- card-body-icon --}}
          <div class="card-body-icon">

            <i class="fas fa-fw fa-book"></i>

          </div>
          {{-- /card-body-icon --}}

          <h1 class="text-center"><strong>{{ $books->count() }}</strong></h1>

        </div>
        {{-- /card-body --}}

      </div>
      {{-- /card --}}
      
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">

      {{-- card --}}
      <div class="card text-white bg-warning o-hidden h-100">

        {{-- card-header --}}
        <div class="card-header">

            Emprunt

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

          {{-- card-body-icon --}}
          <div class="card-body-icon">

            <i class="fas fa-fw fa-book-reader"></i>

          </div>
          {{-- /card-body-icon --}}

          <h1 class="text-center"><strong>{{ $borrowers->count() }}</strong></h1>

        </div>
        {{-- /card-body --}}

      </div>
      {{-- /card --}}

    </div>

    <div class="col-xl-3 col-sm-6 mb-3">

      {{-- card --}}
      <div class="card text-white bg-success o-hidden h-100">

        {{-- card-header --}}
        <div class="card-header">

            Livre Emprunter

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

          {{-- card-body-icon --}}
          <div class="card-body-icon">

            <i class="fas fa-fw fa-book-open"></i>

          </div>
          {{-- /card-body-icon --}}

          <h1 class="text-center"><strong>{{ $borrowed->count() }}</strong></h1>

        </div>
        {{-- /card-body --}}

      </div>
      {{-- /card --}}

    </div>

    <div class="col-xl-3 col-sm-6 mb-3">

      {{-- card --}}
      <div class="card text-white bg-danger o-hidden h-100">

        {{-- card-header --}}
        <div class="card-header">

            Etudiants

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

          {{-- card-body-icon --}}
          <div class="card-body-icon">

            <i class="fas fa-fw fa-users"></i>

          </div>
          {{-- /card-body-icon --}}

          <h1 class="text-center"><strong>{{ $students->count() }}</strong></h1>

        </div>
        {{-- /card-body --}}

      </div>
      {{-- /card --}}

    </div>

  </div>

  <!-- DataTables Latest Borrower -->
  <div class="card mb-3">

    {{-- card-header --}}
    <div class="card-header">

      <div class="d-flex justify-content-between">
      
        {{-- group --}}
        <div class="group">

            <i class="fas fa-table"></i> Derniers Emprunts

        </div>
        {{-- /group --}}

        <a href="{{ route('borrower.create') }}" class="btn btn-primary btn-sm">
        
          Add

        </a>

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

              <th>Nom du Livre</th>
              <th>Nom Etudiant</th>
              <th>Utilisateur</th>
              <th>Status</th>
              <th>Expiration</th>
              <th>Action</th>

            </tr>

          </thead>
          {{-- /thead --}}

          {{-- tfoot --}}
          <tfoot>

            <tr>

              <th>Nom du Livre</th>
              <th>Nom Etudiant</th>
              <th>Utilisateur</th>
              <th>Status</th>
              <th>Expiration</th>
              <th>Action</th>


            </tr>

          </tfoot>
          {{-- /tfoot --}}

          {{-- tbody --}}
          <tbody>
            
            @foreach ($borrowers as $borrower)
                
              <tr>
                
                <td>{{ $borrower->book->name }}</td>
                <td>{{ $borrower->student->name }}</td>
                <td>{{ $borrower->user->name }}</td>
                <td>{{ $borrower->status }}</td>
                <td>{{ $borrower->return }}  <span class="badge {{ $borrower->expire() === 'expired' ? 'badge-danger' : ($borrower->expire() === 'returned' ? 'badge-success' : 'badge-warning') }}"> {{ $borrower->expire() }} </span></td>
                <td>

                  <form action="{{ route('borrower.destroy', $borrower->id) }}" method="post">
                    
                    {{ csrf_field() }}
                    
                    {{-- Button Details Borrower --}}
                    <a href="{{ route('borrower.show', $borrower->id) }}" class="btn btn-secondary btn-sm">

                      Details

                    </a>

                    {{-- Button Edit Borrower --}}
                    <a href="{{ route('borrower.edit', $borrower->id) }}" class="btn btn-primary btn-sm">

                      Editer

                    </a>

                    {{-- Button Delete Borrower --}}
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