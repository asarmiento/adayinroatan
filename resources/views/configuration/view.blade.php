@extends('layouts.app')

@section('content')
<view-configurations configurations="{{json_encode($sysconfs)}}"></view-configurations>
    @endsection
