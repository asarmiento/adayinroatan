@extends('layouts.app')

@section('content')
<edit-user data_user="{{json_encode($user)}}"></edit-user>
    @endsection
