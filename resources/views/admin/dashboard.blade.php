@extends('layout.master')

@section('title', 'Dashboard |')

@section('content')
    <h1>Hi {{ Auth::user()->name }}</h1>
@endsection
