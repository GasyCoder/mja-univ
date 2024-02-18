<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\President;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\PresidentStory;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PresidentStories extends Component
{
    use WithFileUploads, AuthorizesRequests, LivewireAlert, WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate(['president_avatar.*' => 'image|max:2024'])]
    public $president_avatar = [];

    public $president_name;
    public $president_year;
    public $mandat;

    public $is_current = false;
    public $is_interim = false;
    public $is_dead = false;

    public $decret;
    public $page = 10;

    public $dbAvatar, $storyId;

    public function save()
    {
        if (count($this->president_avatar) > 15) {
            $this->alert('warning', 'Vous ne pouvez télécharger que 15 images au maximum.', [
                'toast' => true,
                'icon' => 'error',
                'timer' => 3000,
                'timerProgressBar' => true,
            ]);
            return;
        }

        $this->validate([
            'president_avatar' => 'nullable|array|max:15',
        ]);

        $imagePaths = [];

        foreach ($this->president_avatar as $image) {
            $path = $image->store('pstory', 'public');
            $imagePaths[] = $path;
        }

        PresidentStory::create([
            'president_name'    => $this->president_name,
            'president_year'    => $this->president_year,
            'mandat'            => $this->mandat,
            'is_current'        => $this->is_current ? true : false,
            'is_interim'        => $this->is_interim ? true : false,
            'is_dead'           => $this->is_dead ? true : false,
            'decret'            => $this->decret,

            'president_avatar'            => $this->president_avatar = implode(',', $imagePaths),

        ]);

        $this->reset();
        $this->showMessage('Ajouté avec succèss!');
        return $this->redirect('/adminx/president-list', navigate: false);
    }

    public function edit($id)
    {
        $edit = PresidentStory::findOrFail($id);
        $this->storyId                          = $id;
        $this->president_name                   = $edit->president_name;
        $this->president_year                   = $edit->president_year;
        $this->decret                           = $edit->decret;
        $this->mandat                           = $edit->mandat;
        $this->is_current                       = $edit->is_current ? true : false;
        $this->is_interim                       = $edit->is_interim ? true : false;
        $this->is_dead                          = $edit->is_dead ? true : false;

        $this->dbAvatar                         = explode(',', $edit->president_avatar);

    }

    public function update()
    {
        if (count($this->president_avatar) > 15) {
            $this->alert('warning', 'Vous ne pouvez télécharger que 15 images au maximum.', [
                'toast' => true,
                'icon' => 'error',
                'timer' => 3000,
                'timerProgressBar' => true,
            ]);
            return;
        }

        $this->validate([
            'president_avatar' => 'nullable|array|max:4',
        ]);

        $update = PresidentStory::where('id', $this->storyId)->first();

        $imagePaths = explode(',', $update->president_avatar); // get the existing images

        if ($this->president_avatar) {
            $imagePaths = []; // reset the array if new images are uploaded
            foreach ($this->president_avatar as $image) {
                $imagePaths[] = $image->store('pstory', 'public');
            }
        }

        $updateData = [
            'president_name'                => $this->president_name,
            'president_year'                => $this->president_year,
            'mandat'                        => $this->mandat,
            'is_current'                    => $this->is_current ? true : false,
            'is_interim'                    => $this->is_interim ? true : false,
            'is_dead'                       => $this->is_dead ? true : false,
            'decret'                        => $this->decret,

            'president_avatar'              => implode(',', $imagePaths),

        ];

        $update->update($updateData);

        $this->showMessage('Mise à jour avec succèss!');
        return $this->redirect('/adminx/president-list', navigate: false);
    }

    public function render()
    {
        return view('livewire.admin.president.stories', [
            'presidents'  => PresidentStory::latest()->paginate($this->page),
        ]);
    }

    public function delete($id)
    {
        $story = PresidentStory::find($id);
        $story->delete();
        $this->showMessage('Supprimé avec succèss!');
    }

    public function showMessage($message)
    {
        $this->alert('success', $message, [
            'toast' => true,
            'icon' => 'success',
            'timer' => 3000,
            'timerProgressBar' => true,
            'onClose' => 'refresh',
            'message' => $message
        ]);
    }
}
