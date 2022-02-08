<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1><span class="badge bg-outline-success text-success d-block">Posts Deletes</span></h1>

<table class="table border-success shadow">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Body</th>
            <th>URL</th>
            <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($deletePosts as $deletePost)
            <tr>
                <td>{{$deletePost->id}}</td>
                <td>{{$deletePost->title}}</td>
                <td>{{$deletePost->body}}</td>
                <td>{{$deletePost->slug}}</td>
                <td>
                    <button wire:click="restore({{ $deletePost->id }})" class="btn btn-success">Restore</button>
                </td>
                <td>
                    <button wire:click="forceDelete({{ $deletePost->id }})" class="btn btn-danger">Force Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$deletePosts->links()}}
</div>