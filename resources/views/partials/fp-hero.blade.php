@php
  $args = array(
    'posts_per_page' => 3,
    'post_type'      => 'post',
    'cat'            => '11',
  );
  $parent = new WP_Query( $args );
@endphp

<div class="tns-slider">
  @php 
    $i = 1;
    $count = $parent->post_count;
    while ( $parent->have_posts() ) : $parent->the_post(); 
  @endphp
    @include('components.article-hero',[ 
      'title' => get_the_title(), 
      'image' => get_field('mission')['image'], 
      'desc'  => get_field('mission')['desc'],
      'i' => $i,
    ])
  @php $i++; endwhile; @endphp
</div>