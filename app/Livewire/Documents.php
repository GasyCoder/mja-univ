<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Uploader;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Documents extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page = 20;


    public function download($uuid)
    {
        $document = Uploader::where('uuid', $uuid)->where('is_active', true)->firstOrFail();

        return Storage::download($document->file_path, $document->original_name);
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
        return view('livewire.documents.index', [
            'documents' => Uploader::where('is_active', true)->latest()->paginate($this->page),
            'bytesToHuman' => [$this, 'bytesToHuman'],
        ]);
    }
}
