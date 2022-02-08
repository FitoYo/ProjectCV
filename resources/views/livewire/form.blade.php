

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">T</span>
  <input wire:model="title" type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
  </div>
  @error('title') <span class="text-danger">{{$message}}</span>@enderror
  <br>


<label for="basic-url" class="form-label">Your slug URL</label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
  <input wire:model="slug" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" disabled>
</div>

<div class="input-group">
  <span class="input-group-text">Body</span>
  <textarea wire:model="body" class="form-control" aria-label="With textarea" style="height: 200px;"></textarea>
</div>
@error('body') <span class="text-danger">{{$message}}</span>@enderror

<br>
<br>