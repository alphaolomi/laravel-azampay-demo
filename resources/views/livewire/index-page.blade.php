<div class="">
  <livewire:components.hero />

  <!-- Main Section-->
  <section class="py-5">
    <div class="px-lg-5 container mt-5 px-4">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($products as $product)
          <div class="col mb-5">
            <a class="card h-100 text-decoration-none" href="{{ route('products.show', $product->slug) }}">
              <!-- Product image-->
              <img class="card-img-top" src="{{ asset('storage/products/' . $product->image) }}" alt="..." />
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-dark text-decoration-none text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder text-decoration-none">
                    {{-- Fancy Product --}}
                    {{ $product->name }}
                  </h5>
                  <!-- Product price-->
                  <span>TZS {{ $product->price }}</span>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</div>
