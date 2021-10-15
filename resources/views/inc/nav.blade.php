<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{'/' == request()->path() ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{'products' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('products')}}">Product List</a>
        </li>
        <li class="nav-item">
          <a class="{{'add' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('add')}}">Add Product</a>
        </li>
      </ul>
    </div>
  </div>
</nav>