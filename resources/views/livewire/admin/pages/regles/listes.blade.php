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
                    <th scope="col" class="border-0">Type</th>
                    <th scope="col" class="border-0">Updated</th>
                    <th scope="col" class="border-0 rounded-end">Action</th>
                </tr>
            </thead>
            <!-- Table body START -->
            <tbody>
                @foreach($regles as $key => $regle)
                <!-- Table row -->
                <tr>
                    <!-- Table data -->
                    <td>{{ $key+1 }}</td>
                    <!-- Table data -->
                    <td>
                        <div class="d-flex align-items-center position-relative">
                            <!-- Title -->
                            <span class="mb-0 table-responsive-title ms-2">
                                <a href="#" class="">{{ $regle->title }}</a>
                            </span>
                        </div>
                    </td>
                    <!-- Table data -->
                    <td>
                        @if($regle->type == true)
                        <span>Mentions légale</span>
                        @else
                        <span>Politique de confidentialité</span>
                        @endif
                    </td>
                    <td>
                        {{ $regle->updated_at->format('d-M-Y') }}<br>
                    </td>
                    <td>
                        <a href="#!" wire:click="edit({{ $regle->id }})"
                            class="mb-1 btn btn-success-soft btn-round me-1 mb-md-0" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>
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
                    {{-- {{ $regles->links() }} --}}
                </ul>
            </nav>
        </div>
        <!-- Pagination END -->
    </div>
    <!-- Card footer END -->
</div>
<!-- All review table END -->
