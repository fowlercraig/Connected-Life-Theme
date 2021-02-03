<div class="h-screen/2 sm:h-screen-header bg-gray-600 text-white relative">
  <div class="absolute inset-0">
    @include('components.image',[ 
      'id'    => get_post_thumbnail_id(), 
      'size'  => 'story-feat', 
      'class' => 'object-cover object-center w-full h-full'
    ])
  </div>
  <div class="absolute bottom-0 left-0 my-4 md:my-10 container xl:w-3/4">
    <div class="bg-black border-b-2 border-red-600 p-4">
      <h1 class="uppercase font-condensed text-3xl md:text-4xl leading-none">{!! $title !!}</h1>
      <div class="flex justify-between items-center">
        <span class="text-sm font-condensed uppercase font-medium tracking-wide flex items-center">
          {!! get_the_category_list() !!}
        </span>
        <div class="tns-slider__controls text-xs flex items-center space-x-1 font-semibold">
          <button class="prev hover:opacity-50 transition ease duration-300">
            <i class="text-red-600" data-feather="chevron-left"></i>
            <span class="sr-only">Previous Slide</span>
          </button>
          <span>{{ $i }}</span>
          <span>/</span>
          <span>{{ $count }}</span>
          <button class="next hover:opacity-50 transition ease duration-300">
            <i class="text-red-600" data-feather="chevron-right"></i>
            <span class="sr-only">Next Slide</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>