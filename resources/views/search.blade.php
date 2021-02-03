@extends('layouts.app')
@section('content')
  
<div class="container">
  @include('partials.page-header')
  @php 
    $term = get_search_query();
    if(empty($term)){
      $term = 'Connected Car Life';
    }
  @endphp
  {!! do_shortcode('[ajax_load_more search="'. $term .'" container_type="ul" archive="true" post_type="post" posts_per_page="6" transition_container_classes="grid md:grid-cols-2 xl:grid-cols-3 gap-8 xl:gap-10" progress_bar="true" progress_bar_color="ff3100"]') !!}
</div>

@endsection