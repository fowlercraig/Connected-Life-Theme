@extends('layouts.app')
@section('content')

<div class="flex flex-wrap relative border-b border-gray-100">
  <div class="w-full md:w-1/2">
    <div class="sticky top-14">@include('partials.fp-hero')</div>
  </div>
  <div class="w-full md:w-1/2 flex flex-wrap">
    <div class="w-full lg:w-2/3">@include('partials.fp-news')</div>
    <div class="w-full lg:w-1/3">@include('partials.fp-popular')</div>
  </div>
</div>

<div class="container">
  @include('partials.fp-ad')
  @include('components.section-header', ['title' => 'Latest News'])
  @include('partials.fp-latest')
</div>
  
@endsection
