@extends('layout')

@section('body')
@foreach ($posts as $post)

          {!! $post !!};
@endforeach
@endsection

@section('body2')
<h1>seif</h1>
@endsection
