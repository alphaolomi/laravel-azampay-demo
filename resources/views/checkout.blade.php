<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if (isset($success))
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif
    <form action="/checkout" method="POST">
        @csrf
        <h1>Checkout</h1>

        <label for="phone">
            <span>
                Phone
                @error('phone')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </span>
            <input type="tel" name="phone" id="phone">

            <button type="submit">Checkout</button>
        </label>
    </form>
</body>
</html>
