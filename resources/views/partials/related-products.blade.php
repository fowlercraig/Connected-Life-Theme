@php $related = get_field('related_products_home',336) @endphp

<div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 xl:gap-10">
  @foreach($related as $item)
    <article class="space-y-2 block group text-center">
      <a href="{{ $item['review_link'] }}" target="_blank">
        <img src="{!! $item['image']['url'] !!}" class="block">
        <h3 class="leading-none text-sm">{{ $item['title'] }}</h3>
        <div class="group-hover:border-red-600 inline-block border-transparent border-b transition ease duration-300 uppercase font-condensed text-sm tracking-wide font-medium text-red-500">Read the Review</div>
      </a>
    </article>
  @endforeach
</div>