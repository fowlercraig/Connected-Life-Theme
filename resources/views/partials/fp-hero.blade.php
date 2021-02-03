@php
  $args = array(
    'posts_per_page' => 3,
    'post_type'      => 'post',
    'cat'            => '11',
  );
  $parent = new WP_Query( $args );
@endphp

<div class="tns-slider-wrapper relative">
  <div class="tns-slider">
    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      @include('components.article-hero',[ 
        'title' => get_the_title(), 
        'image' => get_field('mission')['image'], 
        'desc'  => get_field('mission')['desc'],
        'i' => $i,
      ])
    @php endwhile; @endphp
  </div>
  <div class="tns-slider__nav flex items-center justify-center space-x-2 p-8 absolute bottom-0 z-30 w-full hidden">
    @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      <div class="h-1 w-1 bg-white rounded"></div>
    @php endwhile; @endphp
  </div>
  <div class="container absolute bottom-0 my-4 md:my-10 lg:pr-20">
    <div class="tns-slider__controls text-xs flex items-center font-semibold md:w-32 focus:outline-none">
      <button class="prev flex items-center justify-center transition ease duration-300 h-10 w-1/2 bg-red-600">
        <i class="text-white" data-feather="chevron-left"></i>
        <span class="sr-only">Previous Slide</span>
      </button>
      <button class="next flex items-center justify-center transition ease duration-300 h-10 w-1/2 bg-red-700">
        <i class="text-white" data-feather="chevron-right"></i>
        <span class="sr-only">Next Slide</span>
      </button>
    </div>
  </div>
</div>