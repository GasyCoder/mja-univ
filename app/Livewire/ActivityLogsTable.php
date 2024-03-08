<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ActivityLog;
use Livewire\WithPagination;

class ActivityLogsTable extends Component
{
    use WithPagination;

    public function render()
    {
        $logs = ActivityLog::latest()->paginate(10);

        return view('livewire.activity-logs-table', ['logs' => $logs]);
    }

}
