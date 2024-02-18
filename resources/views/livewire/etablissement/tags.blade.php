<div class="col-md-6 col-xl-12 mt-4">
    <div class="card card-body border p-4">
       @if($type_etabs)
    <h6 class="mb-2">Equipes d'Accueil</h6>
    <ul class="list-inline mb-0">
        @if($domaine)
        @foreach($domaine as $d)
        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{ $d }}</a> </li>
        @endforeach
        @endif
    </ul>
    @else
    <h6 class="mb-2">Domaines</h6>
    <ul class="list-inline mb-0">
        @if($domaine)
        @foreach($domaine as $d)
        <li class="list-inline-item">
            <a class="btn btn-outline-light btn-sm" href="#">{{ $d }}</a>
        </li>
        @endforeach
        @endif
    </ul>

    <h6 class="mb-2 mt-4">Mentions</h6>
    <ul class="list-inline mb-0">
        @if($mention)
        @foreach($mention as $m)
        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{ $m }}</a> </li>
        @endforeach
        @endif
    </ul>

    <h6 class="mb-2 mt-4">Parcours</h6>
    <ul class="list-inline mb-0">
        @if($parcour)
        @foreach($parcour as $p)
        <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{ $p }}</a> </li>
        @endforeach
        @endif
    </ul>
    @endif
    </div>
</div>
