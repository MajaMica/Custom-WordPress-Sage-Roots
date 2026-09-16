{{-- Included features: additional amenities grid --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Section header --}}
    <div class="max-w-3xl mb-12">
      <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-3">
        {{ $eyebrow }}
      </p>
      <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope mb-4">
        {{ $naslov }}
      </h2>
      <p class="text-[#727971] text-base md:text-lg leading-relaxed">
        {{ $podnaslov }}
      </p>
    </div>

    {{-- Features grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
      @foreach($features as $feature)
        <div class="flex items-center gap-4 bg-white border border-black/10 rounded-xl px-6 py-5 hover:shadow-md hover:border-[#4F7052]/30 transition-all duration-300">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#EAF0EA] flex items-center justify-center text-xl">
            {{ $feature['ikonica'] ?: '✓' }}
          </div>
          <span class="text-[#1D1C17] text-sm md:text-base font-medium">
            {{ $feature['tekst'] }}
          </span>
        </div>
      @endforeach
    </div>

  </div>
</section>