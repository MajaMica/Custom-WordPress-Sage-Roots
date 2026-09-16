{{-- CTA section: contact with background image --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <div class="relative rounded-[20px] overflow-hidden min-h-[474px] flex items-center justify-center">

      {{-- Background image --}}
      @if($pozadina)
        <img src="{{ $pozadina['url'] }}" alt="{{ $pozadina['alt'] ?? 'Lipovačka Oaza' }}"
             class="absolute inset-0 w-full h-full object-cover" />
      @else
        <img src="@asset('resources/images/hero-vila.webp')" alt="Lipovačka Oaza"
             class="absolute inset-0 w-full h-full object-cover" />
      @endif

      <div class="absolute inset-0 bg-black/40"></div>

      <div class="relative z-10 w-full max-w-3xl mx-auto px-6 py-16 md:py-20 text-center">

        <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-3">
          {{ $eyebrow }}
        </p>

        <h2 class="text-white text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope mb-5">
          {{ $naslov }}
        </h2>

        <p class="text-white/90 text-base md:text-lg leading-relaxed max-w-2xl mx-auto mb-10">
          {{ $opis }}
        </p>

        <div class="flex flex-wrap justify-center gap-4">
          <a href="{{ $dugme_1_link['url'] }}"
             class="inline-flex items-center justify-center bg-white/80 hover:bg-white text-[#4F7052] px-8 py-4 rounded-[20px] font-bold text-base transition duration-300">
            {{ $dugme_1_tekst }}
          </a>
          <a href="{{ $dugme_2_link['url'] }}"
             class="inline-flex items-center justify-center border border-white/70 text-white hover:bg-white hover:text-[#4F7052] px-8 py-4 rounded-[20px] font-bold text-base transition duration-300">
            {{ $dugme_2_tekst }}
          </a>
        </div>

      </div>

    </div>

  </div>
</section>