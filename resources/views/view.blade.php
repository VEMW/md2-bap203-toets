@extends('layouts.master')

@section('content')
@foreach ($links as $link)
    <p>This is user {{ $link->title }}</p>
    @endforeach
@endsection