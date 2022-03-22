@extends('layouts.app')

@section('content')
<lists-configurations configurations="{{json_encode($sysconfs)}}"></lists-configurations>
    @endsection
