{{-- Gallery section: header + 1 large + 2 small image cards --}}
<section class="bg-white">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Section header --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
      <div>
        <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-2">{{ $eyebrow }}</p>
        <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope">
          {!! $naslov !!}
        </h2>
      </div>

      <a href="{{ $cta_link['url'] }}"
         class="inline-flex items-center justify-center bg-[#4F6F52] hover:bg-[#3d5a40] text-white px-6 py-4 rounded-[20px] font-bold text-sm md:text-base transition duration-300 self-start md:self-auto">
        {{ $cta_tekst }}
      </a>
    </div>

    {{-- Large image card --}}
    <div class="relative rounded-[20px] overflow-hidden h-[400px] md:h-[600px] lg:h-[720px] mb-6 group">
      @if($velika_slika)
        <img src="{{ $velika_slika['url'] }}" alt="{{ $velika_slika['alt'] ?? $velika_naslov }}"
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
      @else
        <img src="@asset('resources/images/hero-vila.webp')" alt="Lipovačka Oaza"
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
      @endif

      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

      <div class="absolute top-6 left-6 md:top-10 md:left-10 bg-[#C2A35D] text-white px-5 py-2 rounded-[20px] text-sm font-bold">
        {{ $velika_badge }}
      </div>

      <div class="absolute bottom-6 left-6 right-6 md:bottom-10 md:left-10 md:right-10 text-white">
        <h3 class="text-2xl md:text-3xl font-extrabold font-manrope mb-3">{{ $velika_naslov }}</h3>
        <p class="text-white/85 text-sm md:text-base leading-relaxed mb-5 max-w-lg">{{ $velika_opis }}</p>

        <div class="flex flex-wrap gap-x-6 gap-y-2 text-sm">
          @foreach(array_filter(array_map('trim', explode(',', $velika_features))) as $item)
            <span class="flex items-center gap-2">
              <span class="w-5 h-5 rounded-full bg-[#C2A35D]"></span>
              <span class="text-white/80">{{ $item }}</span>
            </span>
          @endforeach
        </div>
      </div>
    </div>

    {{-- Grid: 2 smaller cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      {{-- Small card 1 --}}
      <div class="relative rounded-[20px] overflow-hidden h-[400px] md:h-[500px] lg:h-[720px] group">
        @if($mala_1_slika)
          <img src="{{ $mala_1_slika['url'] }}" alt="{{ $mala_1_slika['alt'] ?? $mala_1_naslov }}"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
        @else
          <img src="@asset('resources/images/bathroom.webp')" alt="Lipovačka Oaza"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

        <div class="absolute top-6 left-6 bg-[#C2A35D] text-white px-5 py-2 rounded-[20px] text-sm font-bold">
          {{ $mala_1_badge }}
        </div>

        <div class="absolute bottom-6 left-6 right-6 text-white">
          <h3 class="text-xl md:text-2xl font-extrabold font-manrope mb-2">{{ $mala_1_naslov }}</h3>
          <p class="text-white/85 text-sm leading-relaxed mb-4">{{ $mala_1_opis }}</p>

          <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs">
            @foreach(array_filter(array_map('trim', explode(',', $mala_1_features))) as $item)
              <span class="flex items-center gap-2">
                <span class="w-4 h-4 rounded-full bg-[#C2A35D]"></span>
                <span class="text-white/80">{{ $item }}</span>
              </span>
            @endforeach
          </div>
        </div>
      </div>

      {{-- Small card 2 --}}
      <div class="relative rounded-[20px] overflow-hidden h-[400px] md:h-[500px] lg:h-[720px] group">
        @if($mala_2_slika)
          <img src="{{ $mala_2_slika['url'] }}" alt="{{ $mala_2_slika['alt'] ?? $mala_2_naslov }}"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
        @else
          <img src="@asset('resources/images/bedroom1.webp')" alt="Lipovačka Oaza"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

        <div class="absolute top-6 left-6 bg-[#C2A35D] text-white px-5 py-2 rounded-[20px] text-sm font-bold">
          {{ $mala_2_badge }}
        </div>

        <div class="absolute bottom-6 left-6 right-6 text-white">
          <h3 class="text-xl md:text-2xl font-extrabold font-manrope mb-2">{{ $mala_2_naslov }}</h3>
          <p class="text-white/85 text-sm leading-relaxed mb-4">{{ $mala_2_opis }}</p>

          <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs">
            @foreach(array_filter(array_map('trim', explode(',', $mala_2_features))) as $item)
              <span class="flex items-center gap-2">
                <span class="w-4 h-4 rounded-full bg-[#C2A35D]"></span>
                <span class="text-white/80">{{ $item }}</span>
              </span>
            @endforeach
          </div>
        </div>
      </div>

    </div>

  </div>
</section>