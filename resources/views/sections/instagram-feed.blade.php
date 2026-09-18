{{-- Instagram Feed section --}}
<section class="section bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6 lg:px-20">

    {{-- Header: profile + follow --}}
    <div class="flex items-center justify-between gap-6 mb-5">

      {{-- Profile (link) --}}
      <a href="{{ $url }}" target="_blank" rel="noopener" class="flex items-center gap-3 group">

        {{-- Icon box — bez rounded (kao u Figmi) --}}
        <div class="flex-shrink-0 w-16 h-16 bg-[#4F7052]/10 flex items-center justify-center">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#4F6F52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
          </svg>
        </div>

        {{-- Handle + label --}}
        <div>
          <p class="text-[#4F6F52] text-xl font-extrabold font-manrope leading-6 group-hover:text-[#3d5a40] transition-colors">
            {{ $handle }}
          </p>
          {{-- 12px kao u Figmi, ne 13px --}}
          <p class="text-[#727971] text-xs leading-5 mt-1">Instagram</p>
        </div>
      </a>

      {{-- Follow button — fiksna širina 144px, centrirano --}}
      <a href="{{ $url }}" target="_blank" rel="noopener"
         class="inline-flex items-center justify-center w-36 h-16 border border-[#4F7052] text-[#4F7052] hover:bg-[#4F7052] hover:text-white rounded-[20px] text-base font-bold font-manrope transition-colors duration-300">
        {{ $follow }}
      </a>
    </div>

    @php
      $validSlike = $slike
        ? collect($slike)->filter(fn($item) => !empty($item['slika']['url']))
        : collect();
    @endphp

    {{-- Grid 6 slika --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5">

      @if($validSlike->count() > 0)
        @foreach($validSlike as $item)
          <a href="{{ $url }}" target="_blank" rel="noopener"
             class="group relative aspect-[17/16] overflow-hidden rounded-[20px]">
            <img src="{{ $item['slika']['url'] }}" alt="Instagram {{ $handle }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
          </a>
        @endforeach
      @else
        @foreach(['hero-vila.webp','bathroom.webp','bedroom.webp','bedroom1.webp','livingroom.webp','hero-vila.webp'] as $slika)
          <a href="{{ $url }}" target="_blank" rel="noopener"
             class="group relative aspect-[17/16] overflow-hidden rounded-[20px]">
            <img src="@asset('resources/images/' . $slika)" alt="Instagram {{ $handle }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
          </a>
        @endforeach
      @endif

    </div>

  </div>
</section>