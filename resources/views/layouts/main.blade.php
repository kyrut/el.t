@extends('layouts.app')
@section('content')
    @include('layouts.components.header')
    <main-component :categories="{{json_encode($categories)}}"></main-component>
    @include('layouts.components.footer')
@endsection
