<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Models\Abonnement;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Notifications\NewPostPublished;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Posts extends Component
{
    use WithFileUploads, AuthorizesRequests, LivewireAlert, WithPagination;
    protected $paginationTheme = 'bootstrap';
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

    #[Validate(['images.*' => 'image|max:2024'])]
    public $images = [];
    #[Validate('required')]
    public $title, $sub_title, $category_id, $contenus;
    public $is_active, $is_sendemail, $addForm, $updateForm, $openTrash = false;
    public $is_slider = false;
    public $page = 10;
    public $postId, $imagePost;


    public function save()
    {
        if (count($this->images) > 20) {
            $this->alert('warning', 'Vous ne pouvez télécharger que 20 images au maximum.', [
                'toast' => true,
                'icon' => 'error',
                'timer' => 3000,
                'timerProgressBar' => true,
            ]);
            return;
        }

        $this->validate([
            'title' => 'required',
            'images' => 'nullable|array|max:20',
        ]);

        $imagePaths = [];

        foreach ($this->images as $image) {
            $path = $image->store('post', 'public');
            $imagePaths[] = $path;
        }

        $post = Post::create([
            'title'             => $this->title,
            'sub_title'         => $this->sub_title,
            'contenus'          => $this->contenus,
            'category_id'       => $this->category_id,
            'is_active'         => $this->is_active ? true : false,
            'is_slider'         => $this->is_slider ? true : false,
            'is_sendemail'      => $this->is_sendemail ? true : false,
            'images'            => $this->images = implode(',', $imagePaths),
        ]);
        $this->dispatch('contentChanged');
        if ($this->is_sendemail) {
            $subscribers = Abonnement::where('is_subscribed', true)->get();

            //dd($subscribers);

            foreach ($subscribers as $subscriber) {
                $subscriber->notify(new NewPostPublished($post));
            }
        }

        $this->reset();
        $this->showMessage('Post ajouté avec succèss!');
        return $this->redirect('/adminx/article', navigate: false);
    }

    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
        $this->showMessage('Opération avec succès !');
    }

    public function showShare()
    {
        $this->is_active = $this->is_active;
    }

    public function edit($id){

        $edit = Post::findOrFail($id);
        $this->postId               = $id;
        $this->title                = $edit->title;
        $this->sub_title            = $edit->sub_title;
        $this->contenus             = $edit->contenus;
        $this->category_id          = $edit->category_id;
        $this->is_active            = $edit->is_active ? true : false;
        $this->is_slider            = $edit-> is_slider ? true : false;
        $this->imagePost            = explode(',', $edit->images);

        $this->updateForm           = true;
    }

    public function update()
    {
        if (count($this->images) > 20) {
            $this->alert('warning', 'Vous ne pouvez télécharger que 20 images au maximum.', [
                'toast' => true,
                'icon' => 'error',
                'timer' => 3000,
                'timerProgressBar' => true,
            ]);
            return;
        }

        $this->validate([
            'images' => 'nullable|array|max:20',
        ]);

        $update = Post::where('id', $this->postId)->first();

        // Get existing images
        $imagePaths = explode(',', $update->images);

        // Add new images
        foreach ($this->images as $image) {
            $path = $image->store('post', 'public');
            $imagePaths[] = $path;
        }

        // Supprimez les éléments vides du tableau
        $imagePaths = array_filter($imagePaths, function ($value) {
            return !is_null($value) && $value !== '';
        });

        $updateData = [
            'title'             => $this->title,
            'sub_title'         => $this->sub_title,
            'contenus'          => $this->contenus,
            'category_id'       => $this->category_id,
            'is_active'         => $this->is_active ? true : false,
            'is_slider'         => $this->is_slider ? true : false,


            'images'            => implode(',', $imagePaths),
        ];

        $update->update($updateData);

        $this->reset();
        $this->showMessage('Post mise à jour avec succèss!');
        return $this->redirect('/adminx/article', navigate: false);
    }

    public function deleteImage($key)
    {
        // Supprimez l'image du tableau $this->imagePost
        if (isset($this->imagePost[$key])) {
            // Supprimez également le fichier de l'image du disque
            Storage::disk('public')->delete($this->imagePost[$key]);
            unset($this->imagePost[$key]);
        }

        // Convertissez $this->imagePost en chaîne de caractères
        $this->imagePost = implode(',', $this->imagePost);

        // Mettez à jour la base de données
        $remove = Post::find($this->postId);
        $remove->images = $this->imagePost;
        $remove->save();
        $this->showMessage('Opération avec succès !');
    }





    public function addPost(){
        $this->addForm = true;
    }

    public function cancelAdd()
    {
        $this->addForm = false;
    }

    public function cancelUpdate()
    {
        $this->updateForm = false;
    }

    public function active($id)
    {
        $active = Post::findOrFail($id);
        $active->update([
            'is_active'   => false,
        ]);
        $this->showMessage('Post désactivé');
    }

    public function desactive($id)
    {
        $desactive = Post::findOrFail($id);
        $desactive->update([
            'is_active'  => true,
        ]);
        $this->showMessage('Post activé');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        $this->showMessage('Post en corbeille !');
    }

    public function trash()
    {
        $this->openTrash = true;
    }

    public function cancel()
    {
        $this->openTrash = false;
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);

        $post->restore();

        $this->showMessage('Post a été restauré!');
    }

    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);

        $post->forceDelete();

        $this->showMessage('Post a été supprimé définitivement!');
    }

    public function render()
    {
        return view('livewire.admin.posts.index', [

            'posts' => Post::latest()->paginate($this->page),
            'allPosts' => Post::count(),
            'trashes' => Post::onlyTrashed()->latest()->paginate($this->page),
            'trasheCount' => Post::onlyTrashed()->count(),
            'categories' => Category::where('is_active', true)->get(),
        ]);
    }
}
