@if(isset($standalone))
    @extends('layouts.auth')
    @section('content')
@endif

@include('auth.partials.forgot')

@if(isset($standalone))
    @endsection
@endif
