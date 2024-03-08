<?php

namespace App\Livewire;

use App\Models\Revue;
use Livewire\Component;
use App\Models\Publication;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Publications extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page = 20;
    public $document;

    public function download($revue_id, $uuid)
    {
        $document = Publication::where('revue_id', $revue_id)
            ->where('uuid', $uuid)
            ->where('is_active', true)
            ->firstOrFail();

        return response()->file(storage_path("app/public/{$document->file_path}"));
    }


    public function render()
    {
        return view('livewire.publications.index', [
            'revues' => Revue::where('is_active', true)->latest()->paginate($this->page),
            'countRevue' => Revue::where('is_active', true)->count(),

            'countArticle'  => Publication::where('is_active', true)->whereNotNull('file_path')->count(),
        ]);
    }
}
