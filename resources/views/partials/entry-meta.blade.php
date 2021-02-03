<div>
  <p class="font-condensed text-black opacity-50 text-sm uppercase">{{ __('Author', 'sage') }}</p>
  <p class="byline author vcard">
    {{ get_the_author() }}
  </p>
</div>

<hr class="border-0 h-px bg-black bg-opacity-25 hidden lg:block">

<div>
  <p class="font-condensed text-black opacity-50 text-sm uppercase">{{ __('Posted', 'sage') }}</p>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>
</div>

<hr class="border-0 h-px bg-black bg-opacity-25 hidden lg:block">

<div>
  <p class="font-condensed text-black opacity-50 text-sm uppercase">{{ __('Share', 'sage') }}</p>
  <div class="flex items-center space-x-2">
    <a href="https://www.facebook.com/sharer/sharer.php?u=@php(the_permalink())" class="rounded-full bg-black bg-opacity-25 hover:bg-opacity-50 transition ease duration-300 h-10 w-10 flex items-center justify-center"><i stroke-width="1px" data-feather="facebook"></i></a>
    <a href="https://twitter.com/intent/tweet?url=@php(the_permalink())&text=@php(the_title())" class="rounded-full bg-black bg-opacity-25 hover:bg-opacity-50 transition ease duration-300 h-10 w-10 flex items-center justify-center"><i stroke-width="1px" data-feather="twitter"></i></a>
    <a href="mailto:info@example.com?&subject=&body=Check out this link: @php(the_permalink())" class="rounded-full bg-black bg-opacity-25 hover:bg-opacity-50 transition ease duration-300 h-10 w-10 flex items-center justify-center"><i stroke-width="1px" data-feather="mail"></i></a>
  </div>
</div>