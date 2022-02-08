<div class="container">
	<h1><span class="badge bg-success d-block">List of Posts</span></h1>
@if (session()->has('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif
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
		@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->body}}</td>
				<td>{{$post->slug}}</td>
				<td>
					<button wire:click="edit({{ $post->id }})" class="btn btn-outline-success">Edit</button>
				</td>
				<td>
					<button wire:click="destroy({{ $post->id }})" class="btn btn-outline-danger">Remuve</button>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
{{$posts->links()}}
</div>