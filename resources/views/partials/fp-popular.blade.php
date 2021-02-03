@php
  $args = array(
    'posts_per_page' => 6,
    'post_type'      => 'post',
    'showposts'        => 10,
    'orderby'          => 'meta_value_num',
    'meta_key'         => 'post_views_count',
  );
  $parent = new WP_Query( $args );
@endphp

<div class="">
  @php while ( $parent->have_posts() ) : $parent->the_post(); 
  @endphp
    @include('components.article-small',[
      'title' => get_the_title(), 
      'desc'  => get_field('subheadline'), 
      'cat'   => 'News'
    ])
  @php $i++; endwhile; @endphp
</div>
