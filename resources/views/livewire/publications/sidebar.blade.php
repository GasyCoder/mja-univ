<!-- Right sidebar START -->
<div class="col-lg-4 col-xl-3">
    <div class="p-4 mb-4 shadow card card-body">
        <!-- Title -->
        <h5 class="mb-3">Autres revues</h5>
        <ul class="mb-0 list-inline">
            <!-- Others revues -->
            @forelse($autresRevues as $autresRevue)
            <li class="list-inline-item">
                <a href="" class="btn btn-sm btn-light btn-primary-soft">{{ $autresRevue->sigle }}</a>
            </li>
            @empty
            <p class="btn btn-sm btn-light btn-danger-soft text-danger col-md-12">Aucun d'autre revue</p>
            @endforelse
        </ul>
    </div>
    <!-- Category START -->
    <div class="col-md-6 col-xl-12">
        <div class="p-4 mb-0 shadow card card-body">
            <!-- Title -->
            <h5 class="mb-3">Archives</h5>
            <!-- Item -->
            @forelse($archives as $archive)
            <div class="mb-2 d-flex justify-content-between align-items-center">
                <a href="{{ route('download_revue', ['revue_id' => $archive->revue_id, 'uuid' => $archive->uuid]) }}"
                    target="_blank"
                    class="h6 fw-light text-truncate-2">
                    <i class="fas fa-caret-right text-orange me-2"></i>{{ $archive->revue->sigle }} - {{ $archive->annee->annee }}
                </a>
                <span class="small">({{ $archive->volume->volumeName }})</span>
            </div>
            @empty
            <div>
                <p class="btn btn-sm btn-light btn-danger-soft text-danger col-md-12">Aucun archive</p>
            </div>
            @endforelse
            <!-- End Item -->
        </div>
    </div>
    <!-- Category END -->
</div>
<!-- Right sidebar END -->
