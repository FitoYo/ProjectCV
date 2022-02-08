<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;  // clase de paginacion del componente Livewire ///////
use App\Models\Post;
use Illuminate\Support\Str;


class PostComponent extends Component
{

    use WithPagination;


    protected $paginationTheme = 'bootstrap';

    public $post;

    public $post_id;

    public $title;

    public $body;

    public $slug;

    public $search_title;

    public $view = 'create';


    
    public function render()
    {
        return view('livewire.post-component', ['posts' => Post::orderBy('id', 'desc')->where('title', 'LIKE', "%$this->search_title%")->paginate(9)]);

    }
  
    public function updatedTitle($title)
    {
        $this->slug = Str::slug($title);
    }


    public function destroy($id)
    {
        Post::find($id)->delete();

        session()->flash('message', __('Post Delete'));        

    }


    public function store()
    {
        $this->validate(['title' => 'required', 'body' => 'required', 'slug' => 'required']);

        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'slug' => $this->slug
        ]);    //$this->edit($post->id);
        session()->flash('message', __('Post Create successfully'));

        $this->default();
    }

    public function edit($id)
    {
        $post_edit = Post::find($id);

        $this->post_id = $post_edit->id;
        $this->title = $post_edit->title;
        $this->body = $post_edit->body;
        $this->slug = $post_edit->slug;

        $this->view = 'edit';        
    }

    public function update()
    {
        $this->validate(['title' => 'required', 'body' => 'required', 'slug' => 'required']);

        $post = Post::find($this->post_id);

        $post->update([
            'title' => $this->title,
            'body' => $this->body,
            'slug' => $this->slug
        ]);
        session()->flash('message', __('Post Update successfully'));

        $this->default();
    }

    public function default()
    {
        $this->title = '';
        $this->body = '';
        $this->slug = '';

        $this->view = 'create';    
    }


}
