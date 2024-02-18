<!-- Card header START -->
<div class="card-header bg-light">
    <!-- Search and select START -->
    <div class="row g-3 align-items-center justify-content-between">
        <!-- Search bar -->
        <div class="col-md-12">
            <form class="rounded position-relative">
                <input class="form-control bg-body" type="search" placeholder="Rechercher..." aria-label="Search">
                <button
                    class="p-2 bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y text-primary-hover text-reset"
                    type="submit">
                    <i class="fas fa-search fs-6 "></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Search and select END -->
</div>
<!-- Card header END -->
<!-- All review table START -->
<div class="pb-0 mt-4 mb-4 bg-transparent border card card-body">
    <!-- Table START -->
    <div class="border-0 table-responsive">
        <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
            <!-- Table head -->
            <thead>
                <tr>
                    <th scope="col" class="border-0 rounded-start">#</th>
                    <th scope="col" class="border-0">Titre</th>
                    <th scope="col" class="border-0">Lieu</th>
                    <th scope="col" class="border-0">Date début</th>
                    <th scope="col" class="border-0">Date fin</th>
                    <th scope="col" class="border-0">Status</th>
                    <th scope="col" class="border-0">Archive</th>
                    <th scope="col" class="border-0 rounded-end">Action</th>
                </tr>
            </thead>
            <!-- Table body START -->
            <tbody>
                @foreach($events as $key => $event)
                <!-- Table row -->
                <tr>
                    <!-- Table data -->
                    <td>{{ $key+1 }}</td>
                    <!-- Table data -->
                    <td>
                        <div class="d-flex align-items-center position-relative">
                            <!-- Title -->
                            <span class="mb-0 table-responsive-title ms-2">
                                <a href="#" class="">{{ Str::limit($event->title, 30) }}</a>
                            </span>
                        </div>
                    </td>
                    <!-- Table data -->
                    <td>
                        {{ $event->location }}
                    </td>
                    <td>
                        {{ $event->dateStart->format('d-M-m') }}<br>
                        <small>{{ $event->hourStart->format('H:i') }}</small>
                    </td>
                    <!-- Table data -->
                    <td>
                        {{ $event->dateEnd->format('d-M-m') }} <br>
                        <small>{{ $event->hourEnd->format('H:i') }}</small>
                    </td>
                    <!-- Table data -->
                    <td>
                       @if($event->is_active == true)
                       <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" value="1"
                            wire:click="active({{ $event->id }})" checked  type="checkbox" id="checkPrivacy1">
                        </div>
                        @else
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" value="0"
                            wire:click="desactive({{ $event->id }})" type="checkbox" id="checkPrivacy2">
                        </div>
                        @endif
                     </td>
                     <td>
                        @if($event->is_archive == true)
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" value="1"
                            wire:click="archiveActif({{ $event->id }})" checked  type="checkbox" id="checkPrivacy1">
                        </div>
                        @else
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" value="0"
                            wire:click="archiveDesactif({{ $event->id }})" type="checkbox" id="checkPrivacy2">
                        </div>
                        @endif
                    </td>
                    <!-- Table data -->
                    <td>
                        <a href="#" wire:click="edit({{ $event->id }})"
                            class="mb-1 btn btn-success-soft btn-round me-1 mb-md-0"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        @if($event->trashed())
                        <button wire:confirm="Vous êtes sur de Restaurer?" wire:click="restoreEvent({{ $event->id }})"
                            class="mb-1 btn btn-success-soft btn-round me-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="" data-bs-original-title="Restore">
                            <i class="bi bi-arrow-counterclockwise"></i>
                        </button>
                        @else
                        <button wire:confirm="Vous êtes sur de Supprimer?" wire:click="delete({{ $event->id }})"
                            class="mb-1 btn btn-danger-soft btn-round me-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="" data-bs-original-title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            <!-- Table body END -->
        </table>
    </div>
    <!-- Table END -->
    <!-- Card footer START -->
    <div class="px-0 bg-transparent card-footer">
        <!-- Pagination START -->
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
            <!-- Content -->
            <!-- Pagination -->
            <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                <ul class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                    {{ $events->links() }}
                </ul>
            </nav>
        </div>
        <!-- Pagination END -->
    </div>
    <!-- Card footer END -->
</div>
<!-- All review table END -->
