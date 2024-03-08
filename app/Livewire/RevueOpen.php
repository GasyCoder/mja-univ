<?php

namespace App\Livewire;

use App\Models\Annee;
use App\Models\Revue;
use Livewire\Component;
use App\Models\Publication;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class RevueOpen extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 20;
    public $sigle;
    public $sub_title;
    public $revueId;
    public $uuid;
    public $activeTab;

    public function mount($uuid)
    {
        $revue = Revue::where('is_active', true)->where('uuid', $uuid)->firstOrFail();
        $this->sigle         = $revue->sigle;
        $this->sub_title     = $revue->sub_title;
        $this->revueId       = $revue->id;


    }

    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }


    public function render()
    {
        $annees = Annee::whereHas('publications', function ($query) {
            $query->where('revue_id', $this->revueId)->where('is_active', true);
        })->get();

        $publicationsByAnnee = [];
        foreach ($annees as $annee) {
            $publicationsByAnnee[$annee->annee] = Publication::where('revue_id', $this->revueId)
                ->where('is_active', true)
                ->where('annee_id', $annee->id)
                ->paginate($this->page);
        }

        return view('livewire.publications.revue_open', [
            'publicationsByAnnee' => $publicationsByAnnee,

            'bytesToHuman' => [$this, 'bytesToHuman'],

            'archives'  => Publication::onlyTrashed()->latest()->paginate($this->page),

            'autresRevues'  => Revue::where('is_active', true)->where('uuid', '!=', $this->uuid)
            ->latest()->paginate($this->page),
        ]);
    }
}
