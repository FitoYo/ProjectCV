<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex" style="height: 1200px">
            <div class="d-flex d-flex-row">
                <div class="col-md-4">
                    @auth
                    <div class="container-fluid">
                        <h1>User Login :  <span class="badge bg-success">{{Auth::user()->name}}</span></h1>
                    </div>
                    @endauth
                    <div>
                        @include('livewire.search-component')
                    </div>
                    <br><hr><br>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div>
                       @include("livewire.$view")
                    </div>
                </div>
                <div class="col-md-8">
                    @include('livewire.table')
                </div>
            </div>
        </div>
        @auth
            <div class="col-md-8">
                @include('livewire.table-delete')
            </div>
        @endauth    
        
    </div>

</div>