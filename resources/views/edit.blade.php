@extends('app')

@section('content')
<div id="app">
    <phone-edit :data="{{ ['id' => $id, 'name' => $name, 'phone' => $phone] }}"></phone-edit>
</div>
@endsection
