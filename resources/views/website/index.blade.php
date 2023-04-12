@extends('layouts.master')
@push('title')
    Home
@endpush

@section('content')
    @include('website.home.home_header')
    <main>
        @include('website.home.home_navbar')
        @include('website.home.home_testimonials')
        @include('website.home.home_services')
        @include('website.home.home_aboutus')
        @include('website.home.home_projects')
        @include('website.home.home_team')
        @include('website.home.home_blog')
        @include('website.home.home_chat-banner')
    </main>
@endsection
