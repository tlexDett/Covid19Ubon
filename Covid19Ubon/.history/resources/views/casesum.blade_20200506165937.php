@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($data as $data)
        {{ $data-> Province }}
    @endforeach
</div>
@endsection
