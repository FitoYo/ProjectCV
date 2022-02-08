<nav class="navbar navbar-expand-lg navbar-light bg-success mb-5">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="{{ route('index') }}"><h1>Project CV</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @guest
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
        </li>
        @else
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">@csrf<button class="btn btn-success">Logout</button></form>
        </li>
        @endguest
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{ route('carousel') }}">Carousel</a>
        </li>
      </ul>
    </div>
  </div>
</nav>