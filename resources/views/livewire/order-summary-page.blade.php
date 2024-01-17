<section class="py-5">
  <div class="container  px-4">
    {{-- <div class="text-center">
      <h1 class="fw-bolder">Order Summary</h1>
      <p class="lead fw-normal text-muted mb-5">Thank you for your order!</p>

      <div class="" >

      </div> --}}

    <main class="bg-white px-4 pb-5 pt-5 sm:px-6 sm:pt-5 lg:px-8 lg:pt-5">
      <div class="container mx-auto">
        <div class="max-w-xl">
          <h1 class="h3 text-indigo-600">Thank you!</h1>
          <p class="h1 font-weight-bold mt-2">It's on the way!</p>
          <p class="h4 text-muted mt-2">Your order #{{ str_pad($order->id, 6, '0', STR_PAD_LEFT) }} is {{ $order->status }}</p>

          {{-- <dl class="font-weight-bold mt-5 text-sm">
            <dt class="text-dark">Tracking number</dt>
            <dd class="mt-2 text-indigo-600">51547878755545848512</dd>
          </dl> --}}
        </div>

        <section aria-labelledby="order-heading" class="border-top border-secondary mt-5">
          {{-- <h2 id="order-heading" class="sr-only">Your order</h2> --}}

          <h3 class="sr-only">Items</h3>
          @foreach ($order->items as $item)
          <div class="d-flex justify-content-between align-items-center border-bottom border-secondary py-3">
            <img src="{{ asset('storage/products/'.$item->product->image) }}"
              alt="Glass bottle with black plastic pour top and mesh insert."
              width="300"
              class="bg-light h-20 w-20 flex-none rounded-lg object-cover object-center">
            <div class="flex-grow-1 flex-column ml-3 flex">
              <div>
                <h4 class="h5 text-dark">
                  <span>{{ $item->product->name }}</span>
                </h4>
                <p class="text-muted mt-2 text-sm">{{ $item->product->description }}</p>
              </div>
              <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mt-2">
                <div class="d-flex">
                  <dt class="font-weight-bold text-dark">Quantity</dt>
                  <dd class="text-dark ml-2">{{ $item->quantity }}</dd>
                </div>
                <div class="d-flex ml-sm-4">
                  <dt class="font-weight-bold text-dark">Price</dt>
                  <dd class="text-dark ml-2">TZS {{ number_format($item->price, 2) }}</dd>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <div class="ml-sm-0 pl-sm-6 ml-4 mt-3">
            <h3 class="sr-only">Your information</h3>

            <h4 class="sr-only">Addresses</h4>
            <dl class="d-flex justify-content-between border-top border-secondary grid grid-cols-2 gap-3 py-3 text-sm">
              <div>
                <dt class="font-weight-bold text-dark">Shipping address</dt>
                <dd class="text-dark mt-2">
                  <address class="not-italic">
                    <span class="d-block">{{ $order->name }}</span>
                    <span class="d-block">{{ $order->address }}</span>
                  </address>
                </dd>
              </div>
              <div>
                <dt class="font-weight-bold text-dark">Billing address</dt>
                <dd class="text-dark mt-2">
                  <address class="not-italic">
                    <span class="d-block">{{ $order->name }}</span>
                    <span class="d-block">{{ $order->address }}</span>
                  </address>
                </dd>
              </div>
            </dl>

            <h4 class="sr-only">Payment</h4>
            <dl class="border-top border-secondary d-flex justify-content-between py-3 text-sm">
              <div>
                <dt class="font-weight-bold text-dark">Payment method</dt>
                <dd class="text-dark mt-2">
                  <p>Mpesa</p>
                  {{-- <p>Mastercard</p> --}}
                  <p>0747
                        <span aria-hidden="true">....</span>
                        <span class="sr-only">Ending in </span>
                    1498</p>
                </dd>
              </div>
              <div>
                <dt class="font-weight-bold text-dark">Shipping method</dt>
                <dd class="text-dark mt-2">
                  <p>DHL</p>
                  <p>Takes up to 3 working days</p>
                </dd>
              </div>
            </dl>

            <h3 class="sr-only">Summary</h3>

            <dl class="border-top border-secondary space-y-3 pt-3 text-sm">
              {{-- <div class="d-flex justify-content-between">
                <dt class="font-weight-bold text-dark">Subtotal</dt>
                <dd class="text-dark">$36.00</dd>
              </div> --}}
              {{-- <div class="d-flex justify-content-between">
                <dt class="d-flex font-weight-bold text-dark">
                  Discount
                  <span class="bg-light text-muted ml-2 rounded px-2 py-0.5 text-xs">STUDENT50</span>
                </dt>
                <dd class="text-dark">-$18.00 (50%)</dd>
              </div>
              <div class="d-flex justify-content-between">
                <dt class="font-weight-bold text-dark">Shipping</dt>
                <dd class="text-dark">$5.00</dd>
              </div> --}}
              <div class="d-flex justify-content-between">
                <dt class="font-weight-bold h2 text-dark">Total</dt>
                <dd class="text-dark h2">TZS {{ number_format($order->total(), 2) }}</dd>
              </div>
            </dl>
          </div>
        </section>
      </div>
    </main>

  </div>
</section>
