<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">

        <i class="fas fa-bars"></i>

    </button>
    
    <a class="navbar-brand mr-1" href="{{ route('dashboard') }}">Administration</a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">

        {{-- nav-item --}}
        <li class="nav-item dropdown no-arrow">
            
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <i class="fas fa-user-circle fa-fw"></i>

            </a>
        
            {{-- dropdown-menu --}}
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                <a href="#" class="dropdown-item disabled">Bienvenue, {{ Auth::user()->name ?? '' }}</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Se Deconnecter</a>

            </div>
            {{-- /dropdown-menu --}}

        </li>
        {{-- /nav-item --}}

    </ul>
    {{-- /Navbar --}}

</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    {{-- modal-dialog --}}
    <div class="modal-dialog" role="document">

        {{-- modal-content --}}
        <div class="modal-content">

            {{-- modal-header --}}
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Voulez Vous Quittez?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>
                    
                </button>

            </div>
            {{-- /modal-header --}}
                
            {{-- modal-body --}}
            <div class="modal-body">

                Selectionnez "Se Deconnectez" pour Fermer la session

            </div>
            {{-- /modal-body --}}

            {{-- modal-footer --}}
            <div class="modal-footer">

                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Se Deconnecter</a>

            </div>
            {{-- /modal-footer --}}

        </div>
        {{-- modal-content --}}

    </div>
    {{-- /modal-dialog --}}

</div>
