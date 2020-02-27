@extends('profile.app')
@section('profile')
    <my-orders auth="{{ auth()->id() }}"></my-orders>
@endsection