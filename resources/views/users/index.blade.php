@extends('layouts.app')

@section('content')
<lists-users users="{{json_encode($users)}}"></lists-users>
    @endsection
