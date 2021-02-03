<section x-data="{ mobile:false, search:false }" @keydown.window.escape="mobile = false">
  @include('partials.header')
  <main class="main">
    @yield('content')
  </main>
  @include('partials.footer')
</section>