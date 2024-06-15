@extends('layouts.admin')

@section('title', 'Authors')
    
@section('breadcrumb-item')

    <li class="breadcrumb-item">

        <a href="{{ route('author') }}">Auteurs</a>

    </li>

    <li class="breadcrumb-item active">Ajouter</li>

@endsection

@section('content')

    {{-- Add Book Cases --}}
    <div class="card mb-3">

        {{-- card-header --}}
        <div class="card-header">

            <i class="fas fa-plus"></i>Ajouter Auteur

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            <form action="{{ route('author.store') }}" method="POST">

                {{ csrf_field() }}

                {{-- form-group --}}
                <div class="form-group">

                    <label for="inputName">Nom</label>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inputName" placeholder="ex: Jhon Doe" value="{{ old('name') }}">

                    @if ($errors->has('name'))

                        <div class="invalid-feedback">

                            {{ $errors->first('name') }}

                        </div>
                        
                    @endif

                </div>
                {{-- /form-group --}}

                <div class="d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary">Sauvegarder</button>

                </div>

            </form>

        </div>
        {{-- /card-body --}}

    </div>

@endsection