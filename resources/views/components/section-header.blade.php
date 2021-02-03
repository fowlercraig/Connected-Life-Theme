<div class="py-6 md:py-10">
  @if($subtitle)
    <span class="block text-gray-400 font-condensed uppercase leading-none">{{ $subtitle }}</span>
  @endif
  <div class="flex items-center space-x-1">
    <h2 class="font-condensed uppercase text-xl md:text-2xl flex-none leading-none">{!! $title !!}</h2>
    <hr class="h-px border-0 bg-gray-100 w-full" />
  </div>
</div>