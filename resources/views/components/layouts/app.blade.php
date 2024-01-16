<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- SEO --}}
  <title>{{ config('app.name', 'Laravel') }} | {{ $title ?? 'Page Title' }}</title>

  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

  <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>

  {{-- header --}}
  <livewire:components.header />

  {{-- content --}}
  {{ $slot }}

  {{-- footer --}}
  <livewire:components.footer />

</body>

</html>
