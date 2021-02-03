<article @php(post_class('pb-10'))>
  <header class="relative mb-4 sm:mb-10">
    <div class="aspect-ratio-4/3 md:aspect-ratio-16/9 xl:aspect-ratio-21/9 bg-black relative">
      <div class="absolute inset-0">
        @include('components.image',[ 
          'id'    => get_post_thumbnail_id(), 
          'size'  => 'large', 
          'class' => 'object-cover object-center w-full h-full opacity-90'
        ])
      </div>
    </div>
    <div class="absolute inset-x-0 bottom-0">
      <div class="container py-8 text-white space-y-2">
        <div class="uppercase font-condensed bg-red-600 text-white inline-block px-2 antialiased">{!! get_the_category_list(' / ','multiple') !!}</div>
        <h1 class="entry-title text-white text-4xl md:text-6xl lg:text-7xl font-condensed uppercase leading-none" style="text-shadow: 0 5px 20px rgba(0,0,0,.5">
          {!! $title !!}
        </h1>
      </div>
    </div>
  </header>

  <div class="container lg:flex justify-between space-y-4 sm:space-y-10 lg:space-y-0">
    <div class="w-full lg:w-64 order-last">
      <div class="p-4 bg-red-600 rounded text-white text-sm lg:space-y-3 grid grid-cols-2 gap-6 lg:block">
        @include('partials.entry-meta')
      </div>
    </div>
    <div class="entry-content prose max-w-4xl antialiased lg:pr-10">
      @php(the_content())
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>