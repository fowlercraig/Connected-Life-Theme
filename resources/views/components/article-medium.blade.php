<article class="{{ $class }}">
  <a class="block" href="<?php the_permalink() ?>">
    <div class="aspect-ratio-21/9 bg-black mb-4 relative">
      <div class="absolute inset-0">
        @include('components.image',[ 
          'id'    => get_post_thumbnail_id(), 
          'size'  => 'story-md', 
          'class' => 'object-cover object-center w-full h-full'
        ])
      </div>
      <span class="absolute m-4 py-1 px-3 rounded-full bg-red-600 text-white uppercase text-xs font-medium">
        {!! $cat !!}
      </span>
    </div>
    <div class="space-y-2">
      <h2 class="leading-tight">{!! $title !!}</h2>
      <p class="text-sm text-gray-400">{!! $desc !!}</p>
      <a class="uppercase font-condensed text-sm tracking-wide font-medium text-red-500" href="">Read More</a>
    </div>
  </a>
</article>