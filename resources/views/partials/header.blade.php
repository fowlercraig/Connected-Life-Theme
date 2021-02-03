<header class="banner bg-black text-white uppercase font-medium sticky top-0 z-20">
  <div class="container max-w-full flex justify-between items-center h-14 tracking-wide">

    <div class="md:w-full flex items-center justify-start">
      <a title="{{ $siteName }}" class="w-full brand font-semibold" href="{{ home_url('/') }}">
        <span>Connected</span>
        <span class="text-red-600">Car</span>
        <span>Life</span>
      </a>
    </div>

    <nav class="nav-primary hidden md:block w-full text-center">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex justify justify-center items-center space-x-6', 'echo' => false]) !!}
      @endif
    </nav>

    <div class="md:w-full flex items-center justify-end">
      <button @click="search = !search" class="hidden md:inline-block">
        <!-- Icon when menu is closed. -->
        <div x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': search, 'block': !search }"><i data-feather="search"></i></div>
        <!-- Icon when menu is open. -->
        <div x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': !search, 'block': search }" ><i data-feather="x"></i></div>
      </button>
      <button @click="mobile = !mobile" class="inline-block md:hidden">
        <i data-feather="menu"></i>
        <span class="sr-only">Menu</span>
      </button>
    </div>

  </div>
  <div x-show="search" class="bg-white shadow-2xl">
    <form role="search" method="get" class="search-form" action="@php(home_url( '/' ))">
      <div class="container max-w-full flex items-center justify-between text-gray-600">
        <input type="input" class="h-14 text-lg focus:outline-none w-full" placeholder="{!! __('Enter search term', 'sage') !!}" value="" name="s" title="" />
        <button type="submit" class="h-10 bg-red-600 hover:bg-red-700 transition ease px-4 w-1/4 lg:w-1/6 rounded flex flex-none items-center justify-between text-white">
          <span class="uppercase font-condensed text-xl leading-none antialiased">Search</span>
          <i data-feather="chevron-right"></i>
        </button>
      </div>
    </form>
  </div>
</header>


<div 
  x-show="mobile"
  :class="{ 'mobile': open, 'mobile': !open }"
  x-state:on="Menu open" x-state:off="Menu closed"
  x-description="Mobile menu, toggle classes based on menu state."
  class="fixed inset-0 z-30 bg-black bg-opacity-25">
  <div class="absolute w-full max-w-xs h-screen right-0 bg-black text-white ">
    <header class="h-14 container flex items-center tracking-wide font-semibold uppercase mb-4 flex justify-between">
      <div>
        <span>Connected</span>
        <span class="text-red-600">Car</span>
        <span>Life</span>
      </div>
      <button @click="mobile = false" class="inline-block md:hidden">
        <i data-feather="x"></i>
      </button>
    </header>
    <div class="container">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav uppercase space-y-2 font-semibold text-sm tracking-wide', 'echo' => false]) !!}
      @endif
    </div>
  </div>
</div>
