<div class="card card-custom">
    @isset($breadcrumbs)
    <div class="card-header">
        {{-- <h4 class="card-title mt-3">{{ $title }}</h4> --}}
        {{ $breadcrumbs ?? '' }}
      </div>
    @endisset
    <div class="card-body">
        {{ $slot }}
    </div>
</div>