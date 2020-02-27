@extends('layouts.home')
@section('content')
    <providers auth="{{ auth()->id() }}"></providers>
@endsection
