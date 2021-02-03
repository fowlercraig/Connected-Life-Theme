@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    <div class="container">
      <div class="h-16 md:h-32"></div>
      @include('components.section-header', ['title' => 'Featured Product'])
      @include('partials.related-products')
      <div class="h-16 md:h-32"></div>
      @include('components.section-header', ['title' => 'Connected Car Life', 'subtitle' => 'Related Articles From'])
      @include('partials.fp-latest')
    </div>
  @endwhile
@endsection
