<!-- Page main content START -->
<div class="border page-content-wrapper">
@if(!$openTrash)
    <!-- Title -->
    <div class="mb-2 row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            @if(!$addForm)
            <h3 class="mb-3 h4 mb-sm-0">Actualités
                <span class="badge bg-orange bg-opacity-10 text-orange">
                    {{ $allPosts }}</span></h3>
            <div>
                <a href="#" wire:click="addPost()" class="mt-3 mb-0 btn btn-sm btn-primary">Nouvelle Actu</a>
                <a href="#" wire:click="trash()" class="mt-3 mb-0 btn btn-sm btn-dark">
                    <i class="bi bi-trash2-fill"></i> Corbeille
                </a>
            </div>
            @endif
        </div>
    </div>

    @if($updateForm)
    @include('livewire.admin.posts.update')

    @elseif($addForm)
    @include('livewire.admin.posts.add')

    @else
    @include('livewire.admin.posts.list')
    @endif
@else
@include('livewire.admin.posts.trash')
@endif
</div>
<!-- Page main content END -->
