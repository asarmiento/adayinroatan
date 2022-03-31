@extends('layouts.appGuest')

@section('content')
    <div id="app" class="root front-container">
        @if (Route::has('login'))
            @auth
                <script>
                  document.location='/home'
                </script>

            @else
                <login></login>
            @endauth
        @else
            <script>
              document.location='/home'
            </script>
        @endif
    </div>
@endsection
