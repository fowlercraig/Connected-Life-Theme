<div class="h-screen/2 md:h-screen-header bg-gray-600 text-white relative">
  <div class="absolute inset-0">
    @include('components.image',[ 
      'id'    => get_post_thumbnail_id(), 
      'size'  => 'story-feat', 
      'class' => 'object-cover object-center w-full h-full'
    ])
  </div>
  <div class="absolute bottom-0 left-0 mt-4 mb-14 md:mt-10 md:mb-20 container xl:w-3/4">
    <div class="bg-black border-b-2 border-red-600 p-4">
      <h1 class="uppercase font-condensed text-3xl md:text-4xl leading-none">{!! $title !!}</h1>
      <div class="flex justify-between items-center">
        <span class="text-sm font-condensed uppercase font-medium tracking-wide flex items-center">
          @php $category = get_the_category(); echo $category[0]->cat_name; @endphp
        </span>
      </div>
    </div>
  </div>
</div>