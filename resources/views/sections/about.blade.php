{{-- About section: image + stats + text --}}
<section class="bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      {{-- Left: Image with stats overlay --}}
      <div class="relative">
        <div class="relative rounded-[20px] overflow-hidden h-[500px] lg:h-[691px]">
          @if($slika)
            <img src="{{ $slika['url'] }}" alt="{{ $slika['alt'] ?? 'Lipovačka Oaza' }}" class="w-full h-full object-cover" />
          @else
            <img src="@asset('resources/images/livingroom.webp')" alt="Lipovačka Oaza" class="w-full h-full object-cover" />
          @endif

          {{-- Stats overlay --}}
          <div class="absolute bottom-6 left-6 right-6 bg-black/25 backdrop-blur-sm rounded-xl p-5">
            <div class="grid grid-cols-3 gap-2 text-center text-white">
              @foreach($statistike as $stat)
                <div class="border-r border-white/10 last:border-r-0">
                  <div class="text-2xl font-extrabold font-manrope">{{ $stat['broj'] }}</div>
                  <div class="text-xs text-white/50 mt-1">{{ $stat['label'] }}</div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      {{-- Right: Text content --}}
      <div class="bg-white lg:pl-8">
        <h2 class="text-[#4F7052] text-4xl md:text-5xl font-extrabold leading-tight font-manrope mb-6">
          {{ $naslov }}
        </h2>

        <div class="space-y-6 text-[#727971] text-base md:text-lg leading-relaxed">
          <p>{{ $tekst_1 }}</p>
          <p>{{ $tekst_2 }}</p>
        </div>

        <a href="{{ $cta_link['url'] }}" class="inline-flex items-center gap-2 text-[#4F7052] font-bold mt-8 hover:gap-3 transition-all duration-300">
          {{ $cta_tekst }}
          <span>→</span>
        </a>
      </div>

    </div>
  </div>
</section>