@php
  $args = array(
    'posts_per_page' => 6,
    'post_type'      => 'post',
    'cat'            => '-11',
  );
  $parent = new WP_Query( $args );
@endphp

<div class="border-r border-gray-100">
  @php while ( $parent->have_posts() ) : $parent->the_post(); 
  @endphp
    @include('components.article-medium',[
      'title' => get_the_title(), 
      'desc'  => excerpt(15), 
      'cat'   => 'News',
      'class' => 'p-4 md:p-10 border-b last:border-0 border-gray-100 transition ease duration-500 hover:shadow-2xl',
    ])
  @php $i++; endwhile; @endphp
</div>