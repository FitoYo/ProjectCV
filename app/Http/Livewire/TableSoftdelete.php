<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;  // clase de paginacion del componente Livewire ///////
use App\Models\Post;


class TableSoftdelete extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    //public $deletePosts;


    public function mount()
    {
    
    }

    public function render()
    {
        return view('livewire.table-softdelete', ['deletePosts' => Post::onlyTrashed()->paginate(3, ['*'], 'deletePostsPage')]);
    }

    public function restore($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();

        session()->flash('message', __('Post Restore successfully'));

    }
    
    public function forceDelete($id)
    {
        Post::onlyTrashed()->where('id', $id)->forceDelete();

        session()->flash('message', __('Post Delete Permanent'));

    }

}
