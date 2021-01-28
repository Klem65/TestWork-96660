@extends('app')

@section('content')
@if($errors->any())
@foreach($errors->all() as $error)
<p style="border-color:#F7281E;
    background-color:#F8D8D7;
    color: #ec3309;">{{ $error }}</p>
@endforeach
@endif
<div id="app">
    <phone :phones="{{ $phones }}"></phone>
</div>
@endsection
