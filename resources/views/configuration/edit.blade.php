@extends('layouts.app')

@section('content')
<edit-configuration data_config="{{json_encode($sysconf)}}"></edit-configuration>
    @endsection
