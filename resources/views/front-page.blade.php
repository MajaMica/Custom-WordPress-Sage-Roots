@extends('layouts.app')

@section('content')
  {{-- ACF Hero (from Gutenberg) - on top --}}
  @while(have_posts()) @php(the_post())
    {!! the_content() !!}
  @endwhile

  {{-- Hardcoded sections below --}}
  @include('sections.amenities')
  @include('sections.about')
  @include('sections.gallery')
  @include('sections.included')
  @include('sections.testimonials')
  @include('sections.booking')
  @include('sections.cta')
@endsection