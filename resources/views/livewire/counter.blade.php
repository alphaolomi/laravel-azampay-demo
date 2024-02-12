{{-- <div> --}}
{{-- Be like water. --}}
{{-- </div> --}}
<div class="container py-12 px-4 mx-auto">
    <h1>{{ $count }}</h1>

    <button wire:click="increment" class="btn btn-primary">+</button>

    <button wire:click="decrement" class="btn btn-danger">-</button>
</div>
