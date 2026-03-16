@if(isset($standalone))
    @extends('layouts.auth')
    @section('content')
@endif

@include('auth.partials.login')

@if(isset($standalone))
    @endsection
@endif