<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="px-lg-5 container px-4">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-lg-0 ms-lg-4 mb-2 me-auto">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Products</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#!">All Products</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
          </ul>
        </li>
      </ul>
      <livewire:components.my-cart />
    </div>
  </div>
</nav>
