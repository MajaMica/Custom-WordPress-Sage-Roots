{{-- Contact page hero — full-bleed image with dark gradients, bottom-left content --}}
@php
  $bgUrl = $image ? $image['url'] : get_theme_file_uri('resources/images/hero-vila.webp');
@endphp

<section class="hero-full bg-white">
  <div
    class="relative w-full h-[420px] md:h-[500px] lg:h-[548px] overflow-hidden bg-cover bg-center"
    style="background-image: url('{{ $bgUrl }}');"
  >
    {{-- Top gradient (dark → transparent) --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/90 to-transparent to-55%"></div>

    {{-- Bottom gradient (transparent → dark) --}}
    <div class="absolute inset-0 bg-gradient-to-b from-transparent from-44% to-black"></div>

    {{-- Content (bottom-left, aligned to global container) --}}
    <div class="absolute inset-0 flex items-end">
      <div class="max-w-7xl mx-auto w-full px-6 lg:px-20 pb-10 lg:pb-20">
        <h1 class="text-white text-4xl md:text-5xl lg:text-7xl font-extrabold leading-[1.05] font-['Manrope']">
          {{ $naslov }}
        </h1>
        <p class="text-white text-base font-normal leading-7 mt-4 max-w-md font-['Plus_Jakarta_Sans']">
          {!! nl2br(e($podnaslov)) !!}
        </p>
      </div>
    </div>
  </div>
</section>