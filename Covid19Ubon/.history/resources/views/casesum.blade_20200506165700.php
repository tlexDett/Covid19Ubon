@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($data as $data)
                    {{ $data }}
                    @endforeach
</div>
@endsection
