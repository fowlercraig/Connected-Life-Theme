@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="mx-auto max-w-4xl">
      <div class="container">
        @include('partials.page-header')
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    </div>
  @endwhile
@endsection
