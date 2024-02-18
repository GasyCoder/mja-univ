<!-- Page main content START -->
<div class="border page-content-wrapper">
    <!-- Title -->
    <div class="mb-3 row">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h3 class="mb-2 h4 mb-sm-0">Evènements <span class="badge bg-orange bg-opacity-10 text-orange">{{ $events->count() }}</span>
            </h3>
            @if(!$addForm)
            <a href="#" wire:click="addEvent()" class="mb-0 btn btn-sm btn-primary">Nouvelle
                Evenement</a>
            @endif
        </div>
    </div>

    @if($updateForm)
    @include('livewire.admin.events.update')

    @elseif($addForm)
    @include('livewire.admin.events.add')

    @else
    @include('livewire.admin.events.list')
    @endif
</div>
<!-- Page main content END -->
