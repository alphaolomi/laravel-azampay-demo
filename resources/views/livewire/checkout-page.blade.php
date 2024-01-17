<!-- Checkout form-->
<main class="px-lg-5 container my-5 px-4">
    @if (session()->has('error_message'))
      <div class="alert alert-danger">
        {{ session()->get('error_message') }}
      </div>
    @endif

    {{-- @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}
  <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="">Your cart</span>
        <span class="badge rounded-pill bg-black">3</span>
      </h4>
      <ul class="list-group mb-3">
        @foreach ($cart['items'] as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{ $item['name'] }}</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">TZS {{ $item['price'] }}</span>
          </li>
        @endforeach
        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
          <div class="text-red">
            <h6 class="my-0">Tax</h6>
          </div>
          <span class="text-success">+TZS {{ $cart['tax'] }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between py-4">
          <span>Total (TZS)</span>
          <strong class="text-body-secondary">TZS {{ number_format($cart['total'], 2) }}</strong>
        </li>
      </ul>

      {{-- <form class="card p-2" >
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </form> --}}
    </div>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" action="{{ route('checkout.store') }}" method="POST">
        @csrf
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="firstName"
              placeholder="" required autofocus name="first_name" value="{{ old('first_name') }}">
            @error('first_name')
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            @enderror
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" required name="last_name"
              value="{{ old('last_name') }}">
            @error('last_name')
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            @enderror
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="you@email.com" name="email" value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              @enderror
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
              placeholder="1234 Mtaa wa Sikuu" required name="address" value="{{ old('address') }}">
            @error('address')
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            @enderror
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" required name="country">
              <option value="">Choose...</option>
              <option selected>Tanzania</option>
              <option>Kenya</option>
            </select>
            @error('country')
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            @enderror
          </div>

          <div class="col-md-4">
            <label for="region" class="form-label">Region</label>
            <select class="form-select" id="region" required name="region">
              <option value="">Choose...</option>
              <option selected>Dar es Salaam</option>
              <option selected>Arusha</option>
            </select>
            @error('region')
              <div class="invalid-feedback">
                Please provide a valid region.
              </div>
            @enderror
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" placeholder=""
              name="zip" value="{{ old('zip') }}">

            @error('zip')
              <div class="invalid-feedback">
                Zip code required.
              </div>
            @enderror
          </div>
        </div>

        <hr class="my-4">

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-address" name="same_address">
          <label class="form-check-label" for="same-address">Shipping address is the same as my billing
            address</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info" name="save_info">
          <label class="form-check-label" for="save-info">Save this information for next time</label>
        </div>

        <hr class="my-4">

        <h4 class="mb-3">Payment</h4>

        <div class="my-3">

          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="network" id="btnradio1" autocomplete="off" value="airtel">
            <label class="btn btn-outline-secondary" for="btnradio1">Airtel</label>

            <input type="radio" class="btn-check" name="network" id="btnradio2" autocomplete="off" checked value="mpesa">
            <label class="btn btn-outline-secondary" for="btnradio2">Mpesa</label>

            <input type="radio" class="btn-check" name="network" id="btnradio3" autocomplete="off" value="tigopesa">
            <label class="btn btn-outline-secondary" for="btnradio3">Tigopesa</label>

            <input type="radio" class="btn-check" name="network" id="btnradio4" autocomplete="off" value="halopesa">
            <label class="btn btn-outline-secondary" for="btnradio4">Halotel</label>
          </div>
        </div>

        <div class="row gy-3">
          <div class="col-md-6">
            <label for="cc-name" class="form-label">Registered Name</label>
            <input type="text" class="form-control @error('registered_name') is-invalid @enderror" id="cc-name" placeholder="" required name="registered_name" value="{{ old('registered_name') }}">
            @error('registered_name')
              <div class="invalid-feedback">
                Name on mobile number is required
              </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="cc-number" class="form-label">Mobile Number</label>
            <input type="text" class="form-control @error('mobile_number') is-invalid @enderror" id="cc-number" placeholder="" required name="mobile_number" value="{{ old('mobile_number') }}">
            @error('mobile_number')
              <div class="invalid-feedback">
                Mobile number is required
              </div>
            @enderror
          </div>
        </div>

        <button class="w-100 btn btn-lg mt-4 bg-black text-white" type="submit">Complete Order</button>
      </form>
    </div>
  </div>
</main>
