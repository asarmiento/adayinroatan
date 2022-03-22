@extends('layouts.appGuest')

@section('content')
    @if (Route::has('login'))
        @auth
			<?php redirect('/inicio'); ?>
        @else
            <login></login>
        @endauth
    @endif
@endsection
