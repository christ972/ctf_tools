@extends('layouts.default')

@section('title-page')
    
    Gestion de Bibliotheque

@endsection

@section('welcome')

    {{-- card --}}
    <div class="card text-center">

        {{-- card-header --}}
        <div class="card-header">

            Bienvenue a la plus grande bliotheque numerique

        </div>
        {{-- /card-header --}}

        {{-- card-body --}}
        <div class="card-body">

            {{-- card-title --}}
            <h5 class="card-title">

            ---Jules Renard---

            </h5>
            {{-- /card-title --}}

            {{-- card-text --}}
            <p class="card-text">

            Certains livres sont des cimetières où repose la fine fleur des maitres à pensées
            </p>
            {{-- /card-text --}}

            <a href="#" class="btn btn-primary">Voir Plus</a>

        </div>
        {{-- /card-body --}}

    </div>
    {{-- /card --}}
    
@endsection

@section('title-about-us')

    A propos
    
@endsection

@section('content-about-us')
Restez a l' affût de nouvelles ouvrages
Nous renouvellons chaque mois notre Stock de livres  
@endsection