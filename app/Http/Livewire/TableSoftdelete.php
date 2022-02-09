<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;  // clase de paginacion del componente Livewire ///////
use App\Models\Post;


class TableSoftdelete extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshTableSoftdelete' => '$refresh']; //para el refresh del otro componente

    //public $deletePosts = [];
    

    public function render()
    {
        return view('livewire.table-softdelete', ['deletePosts' => Post::onlyTrashed()->paginate(5, ['*'], 'deletePostsPage')]);
    }

    public function restore($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();

        $this->emitTo('post-component', 'refreshPostComponent');  //refresh del otro componente

        session()->flash('message', __('Post Restore successfully'));

    }
    
    public function forceDelete($id)
    {
        Post::onlyTrashed()->where('id', $id)->forceDelete();

        session()->flash('message', __('Post Delete Permanent'));

    }

}
