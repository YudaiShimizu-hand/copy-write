<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.ac31adfe.css') }}">
        <script src="{{ asset('build/assets/app.d225c007.js') }}"></script> --}}
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">EC-PRACITCE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('production.index')}}">商品ページ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cart.index')}}">マイカート</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href={{ route('logout') }} onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                  </li>
                <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
                    @csrf
                </ul>
              </div>
            </div>
          </nav>
        <main>
            <div class="container mt-5">
                {{ $slot }}
            </div>
        </main>
    </body>
</html>
