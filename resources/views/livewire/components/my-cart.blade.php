<div class="d-flex">
    <a class="btn btn-outline-dark" href="{{ route('checkout') }}">
        <i class="bi-cart-fill me-1"></i>
        Cart
        <span class="badge bg-dark text-white ms-1 rounded-pill">
            {{ $cartTotal }}
        </span>
    </a>
</div>
