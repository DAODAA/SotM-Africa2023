@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', 'About SotM Africa')
@section('content')
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <p class="text-justify">{{ $viewData['first paragraph'] }}</p>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <p class="text-justify">{{ $viewData['second paragraph'] }}</p>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <p class="text-justify">{{ $viewData['third paragraph'] }}</p>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <p class="text-justify">{{ $viewData['fourth paragraph'] }}</p>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
@endsection
