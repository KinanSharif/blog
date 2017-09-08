@extends('canvas::frontend.layout')

@if (isset($tag->title))
    @section('title', \Canvas\Models\Settings::blogTitle().' | '.$tag->title)
@else
    @section('title', \Canvas\Models\Settings::blogTitle().' | About Kati Frantz')
@endif
@section('og-title', \Canvas\Models\Settings::blogTitle())
@section('twitter-title', \Canvas\Models\Settings::blogTitle())
@section('og-description', \Canvas\Models\Settings::blogDescription())
@section('twitter-description', \Canvas\Models\Settings::blogDescription())

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-lg-8">
                        {!!
                            $aboutMe
                        !!}             
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('kati-frantz.jpg') }}" alt="" class="img img-circle img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop