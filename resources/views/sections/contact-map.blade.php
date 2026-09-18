{{-- Contact Map section: map left + info right --}}
<section class="section bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12 items-stretch">

      {{-- LEFT: Map --}}
      <div class="flex flex-col">
        <div class="rounded-[20px] overflow-hidden border border-black/10 h-full min-h-[500px]">
          <iframe
            src="{{ $map_embed }}"
            class="w-full h-full"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        {{-- Address below map --}}
        <p class="text-center text-[#727971] text-base font-jakarta leading-6 mt-6">
          {{ $adresa }}
        </p>
      </div>

      {{-- RIGHT: Info --}}
      <div class="flex flex-col justify-center">

        {{-- Eyebrow --}}
        <p class="text-[#C9A96E] text-base font-jakarta leading-7 mb-1">
          {{ $eyebrow }}
        </p>

        {{-- Title --}}
        <h2 class="text-[#4F6F52] text-4xl md:text-5xl font-extrabold font-manrope leading-[1.1] mb-8">
          {!! $naslov !!}
        </h2>

        {{-- Description --}}
        <p class="text-[#727971] text-base font-jakarta leading-7 mb-12">
          {!! $opis !!}
        </p>

        {{-- Details list --}}
        <ul class="space-y-4 mb-12">
          @foreach($detalji as $detalj)
            <li class="flex items-center gap-3">
              <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#4F6F52] flex items-center justify-center">
                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <span class="text-[#727971] text-base font-jakarta leading-7">{{ $detalj['tekst'] }}</span>
            </li>
          @endforeach
        </ul>

        {{-- Button --}}
        <a href="{{ $dugme_url }}" target="_blank" rel="noopener"
           class="inline-flex items-center justify-center w-full lg:w-auto px-10 h-16 border border-[#4F6F52] text-[#4F6F52] hover:bg-[#4F6F52] hover:text-white rounded-[20px] font-bold text-base font-manrope transition-colors duration-300 self-start">
          {{ $dugme_tekst }}
        </a>

      </div>

    </div>

  </div>
</section>