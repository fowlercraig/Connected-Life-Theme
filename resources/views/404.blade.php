@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="aspect-ratio-square md:aspect-ratio-16/9 relative">
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="space-y-2 text-center">
          @include('partials.page-header')
          <div class="text-gray-600">
            @if (! have_posts())
              <x-alert type="warning">
                {!! __('Nothing found for the requested page.', 'sage') !!}
              </x-alert>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
