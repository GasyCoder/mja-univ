<div class="mt-4 col-md-6 col-xl-12">
    <div class="p-4 border card card-body">
    <h6 class="mb-2">Mentions</h6>
        <ul class="mb-0 list-inline">
            @if($mention)
            @foreach($mention as $m)
            <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{ $m }}</a> </li>
            @endforeach
            @endif
        </ul>
    <h6 class="mt-3 mb-2">Parcours</h6>
        <ul class="mb-0 list-inline">
            @if($parcour)
            @foreach($parcour as $p)
            <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{ $p }}</a> </li>
            @endforeach
            @endif
        </ul>

    <h6 class="mt-3 mb-2">Diplôme délivrés</h6>
        <ul class="mb-0 list-inline">
            @if($domaine)
            @foreach($domaine as $d)
            <li class="list-inline-item">
                <a class="btn btn-outline-light btn-sm" href="#">{{ $d }}</a>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
</div>
