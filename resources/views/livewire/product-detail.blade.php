<div class="">
    <!-- Product section-->
<section class="py-5">
    <div class="px-lg-5 container my-5 px-4">
      <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img-top mb-md-0 mb-5"
            src= "{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" /></div>
        <div class="col-md-6">
          <div class="small mb-1">SKU: {{ $product->sku }}</div>
          <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
          <div class="fs-5 mb-5">
            <span class="text-decoration-line-through">TZS {{ $product->price }}</span>
            <span>TZS {{ $product->price }}</span>
          </div>
          <p class="lead">{{ $product->description }}</p>
          <div class="d-flex align-items-center mb-4 gap-2">
            <input class="form-control me-3 text-center" id="inputQuantity" type="num" value="1"
              style="max-width: 3rem" wire:model="quantity" />
            <button class="btn btn-outline-dark flex-shrink-0" type="button" wire:click="addToCart({{ $product->id }})">
              <i class="bi-cart-fill me-1"></i>
              Add to cart
            </button>
            <a class="btn btn-success" href="{{ url('/checkout') }}" role="button">
              <i class="bi-cart-fill me-1"></i>
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related items section-->
  <section class="bg-light py-5">
    <div class="px-lg-5 container mt-5 px-4">
      <h2 class="fw-bolder mb-4">Related products</h2>
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Fancy Product</h5>
                <!-- Product price-->
                $40.00 - $80.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark position-absolute text-white" style="top: 0.5rem; right: 0.5rem">Sale</div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Special Item</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$20.00</span>
                $18.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark position-absolute text-white" style="top: 0.5rem; right: 0.5rem">Sale</div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Sale Item</h5>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$50.00</span>
                $25.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Popular Item</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                $40.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
