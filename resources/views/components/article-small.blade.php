<article class="p-4 md:p-10 border-b border-gray-100 transition ease duration-500 hover:shadow-2xl">
  <a class="block" href="<?php the_permalink() ?>">
    <div class="space-y-2">
      <h2 class="leading-tight text-sm">{!! $title !!}</h2>
      <p class="text-xs text-gray-400">{!! $desc !!}</p>
      <span class="uppercase font-condensed text-sm tracking-wide font-medium text-red-500">Read More</span>
    </div>
  </a>
</article>