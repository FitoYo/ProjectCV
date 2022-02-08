<div class="container-fluid">
	<h1><span class="badge bg-success d-block">Edit Posts</span></h1>

@include('livewire.form')

<div class="btn-group">
<button class="btn btn-success btn-lg d-block" wire:click="update">Update</button>

<button class="btn btn-outline-success btn-lg d-block" wire:click="default">Cancel</button>
</div>
</div>