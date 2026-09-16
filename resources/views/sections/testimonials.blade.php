{{-- Testimonials: guest reviews with sticky stacking cards effect --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Section header --}}
    <div class="mb-12">
      <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-3">
        {{ $eyebrow }}
      </p>
      <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope">
        {!! $naslov !!}
      </h2>
    </div>

    {{-- Outer wrapper with cream background --}}
    <div class="bg-[#F5F0E8] rounded-[20px] p-6 md:p-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">

        {{-- Left: sticky note --}}
        <div class="lg:sticky lg:top-32">
          <p class="text-[#727971] text-base md:text-lg leading-relaxed mb-6">
            {{ $napomena }}
          </p>
          <p class="text-[#4F7052] font-semibold text-sm">
            {{ $potpis }}
          </p>
        </div>

        {{-- Right: stacking testimonial cards --}}
        <div class="relative">

          @foreach($recenzije as $index => $recenzija)
            @php
              $topValue = 24 + ($index * 4);
              $zvezdice = (int) ($recenzija['zvezdice'] ?? 5);
            @endphp
            <div class="sticky mb-6" style="top: {{ $topValue * 4 }}px">
              <div class="bg-white rounded-[20px] p-6 md:p-8 border border-black/10 shadow-lg">
                <div class="flex gap-1 mb-4 text-[#C9A96E]">
                  @for($i = 0; $i < $zvezdice; $i++)
                    <span>★</span>
                  @endfor
                  @for($i = $zvezdice; $i < 5; $i++)
                    <span class="text-gray-300">★</span>
                  @endfor
                </div>
                <p class="text-[#727971] text-base leading-relaxed mb-6">
                  "{{ $recenzija['tekst'] }}"
                </p>
                <div class="flex items-center gap-4">
                  @if(!empty($recenzija['slika']['url']))
                    <img src="{{ $recenzija['slika']['url'] }}" alt="{{ $recenzija['ime'] }}"
                         class="w-14 h-14 rounded-full object-cover" />
                  @else
                    <img src="https://placehold.co/70x70/C2A35D/fff" alt="{{ $recenzija['ime'] }}"
                         class="w-14 h-14 rounded-full" />
                  @endif
                  <div>
                    <p class="text-black font-extrabold font-manrope text-lg">{{ $recenzija['ime'] }}</p>
                    <p class="text-[#4F7052] text-sm font-semibold">{{ $recenzija['lokacija'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    </div>

  </div>
</section>