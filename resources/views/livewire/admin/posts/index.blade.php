<!-- Page main content START -->
<div class="border page-content-wrapper">
@if(!$openTrash)
    <!-- Title -->
    <div class="mb-3 row">
        <div class="col-12">
            <h3 class="mb-2 h4 mb-sm-0">Posts <span class="badge bg-orange bg-opacity-10 text-orange">{{ $posts->count() }}</span>
            </h3>
            @if(!$addForm)
            <a href="#" wire:click="trash()" class="mb-0 btn btn-sm btn-dark">
                <i class="bi bi-trash-fill"></i> Corbeille
            </a>
            <a href="#" wire:click="addPost()" class="mb-0 btn btn-sm btn-primary">Nouvelle
                Post</a>
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
