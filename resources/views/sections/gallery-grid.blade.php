{{-- Gallery Grid section: title + subtitle + filter + image grid --}}
<section class="section bg-white">
  <div class="max-w-5xl mx-auto px-6 lg:px-20 pt-12 lg:pt-16">

    {{-- Title + Subtitle --}}
    <div class="text-center mb-12 lg:mb-16">
      <h1 class="text-[#4F7052] text-5xl md:text-6xl lg:text-7xl font-bold leading-tight font-manrope mb-5">
        {{ $naslov }}
      </h1>
      <p class="text-[#727971] text-base md:text-lg leading-relaxed max-w-md mx-auto">
        {!! $podnaslov !!}
      </p>
    </div>

    {{-- Filter dropdown --}}
    <div class="flex justify-center mb-10 lg:mb-12">
      <button type="button" class="inline-flex items-center gap-3 bg-[#4F7052] hover:bg-[#3d5a40] text-white px-6 py-3 rounded-[12px] font-semibold text-sm transition-colors duration-300">
        Sve slike
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
    </div>

    @php
      $validSlike = $slike 
        ? collect($slike)->filter(fn($item) => !empty($item['slika']['url']))
        : collect();
    @endphp

    {{-- Image grid — 3 cols from tablet, small cards --}}
    <div class="max-w-3xl mx-auto grid grid-cols-2 md:grid-cols-3 gap-3 lg:gap-4">

      @if($validSlike->count() > 0)
        @foreach($validSlike as $item)
          <div class="group relative overflow-hidden rounded-lg aspect-square">
            <img src="{{ $item['slika']['url'] }}"
                 alt="{{ $item['alt'] ?? $item['slika']['alt'] ?? 'Lipovačka Oaza' }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
          </div>
        @endforeach
      @else
        @php
          $fallbackSlike = [
            ['src' => 'hero-vila.webp',  'alt' => 'Dvorište i bazen'],
            ['src' => 'bathroom.webp',   'alt' => 'Kupatilo'],
            ['src' => 'bedroom.webp',    'alt' => 'Spavaća soba'],
            ['src' => 'bedroom1.webp',   'alt' => 'Spavaća soba 2'],
            ['src' => 'livingroom.webp', 'alt' => 'Dnevni boravak'],
            ['src' => 'hero-vila.webp',  'alt' => 'Lipovačka Oaza'],
          ];
        @endphp

        @foreach($fallbackSlike as $slika)
          <div class="group relative overflow-hidden rounded-lg aspect-square">
            <img src="@asset('resources/images/' . $slika['src'])"
                 alt="{{ $slika['alt'] }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div>
          </div>
        @endforeach
      @endif

    </div>

  </div>
</section>