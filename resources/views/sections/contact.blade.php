{{-- Contact section: form left + info right --}}
<section class="section bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">

      {{-- LEFT: Form card --}}
      <div class="bg-white border border-black/10 rounded-[40px] p-6 md:p-10">

        {{-- Header --}}
        <div class="mb-10">
          <h3 class="text-[#4F6F52] text-2xl font-extrabold font-manrope mb-2">
            {{ $forma_naslov }}
          </h3>
          <p class="text-[#727971] text-base leading-7">
            {{ $forma_podnaslov }}
          </p>
        </div>

        {{-- Form --}}
        <form action="#" method="POST" class="space-y-4">
          @csrf

          {{-- Row 1: Name + Email --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" name="name" placeholder="Ime i prezime" required
              class="w-full h-10 px-3 border border-zinc-500/10 rounded-[10px] text-sm placeholder-neutral-400 focus:outline-none focus:border-[#4F7052] transition" />
            <input type="email" name="email" placeholder="Email adresa" required
              class="w-full h-10 px-3 border border-zinc-500/10 rounded-[10px] text-sm placeholder-neutral-400 focus:outline-none focus:border-[#4F7052] transition" />
          </div>

          {{-- Row 2: Date + Phone --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="date" name="date"
              class="w-full h-10 px-3 border border-zinc-500/10 rounded-[10px] text-sm text-neutral-500 focus:outline-none focus:border-[#4F7052] transition" />
            <input type="tel" name="phone" placeholder="Telefon / WhatsApp"
              class="w-full h-10 px-3 border border-zinc-500/10 rounded-[10px] text-sm placeholder-neutral-400 focus:outline-none focus:border-[#4F7052] transition" />
          </div>

          {{-- Message --}}
          <textarea name="message" rows="8"
            placeholder="Recite nam o vašem idealnom boravku — datumi, broj gostiju, posebne prilike..."
            class="w-full px-3 py-3 border border-zinc-500/10 rounded-[24px] text-sm placeholder-neutral-400 focus:outline-none focus:border-[#4F7052] transition resize-none"></textarea>

          {{-- Submit --}}
          <button type="submit"
            class="w-full h-16 bg-[#4F6F52] hover:bg-[#3d5a40] text-white rounded-2xl font-semibold text-base font-manrope transition duration-300">
            {{ $forma_dugme }}
          </button>

          {{-- Trust badges --}}
          <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-2 pt-4">
            @foreach($benefiti as $benefit)
              <span class="flex items-center gap-2 text-xs text-[#727971] font-jakarta">
                <span class="flex-shrink-0 w-5 h-5 rounded-full bg-[#4F6F52] flex items-center justify-center">
                  <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                  </svg>
                </span>
                {{ $benefit['tekst'] }}
              </span>
            @endforeach
          </div>

        </form>

      </div>

      {{-- RIGHT: Image + Info card --}}
      <div class="space-y-6">

        {{-- Image --}}
        @if($slika)
          <img src="{{ $slika['url'] }}" alt="{{ $slika['alt'] ?? 'Lipovačka Oaza' }}"
               class="w-full aspect-[500/286] object-cover rounded-[20px]" />
        @else
          <img src="@asset('resources/images/hero-vila.webp')" alt="Lipovačka Oaza"
               class="w-full aspect-[500/286] object-cover rounded-[20px]" />
        @endif

        {{-- Info card --}}
        <div class="bg-[#4F6F52] rounded-[20px] p-6 md:p-10">

          <h3 class="text-white text-2xl font-extrabold font-manrope mb-8">
            {{ $info_naslov }}
          </h3>

          {{-- Contact items --}}
          <div class="space-y-5">
            @foreach($kontakt_items as $item)
              <div class="flex items-start gap-4">

                {{-- Icon box --}}
                <div class="flex-shrink-0 w-14 h-14 rounded-xl bg-[#A8B394] flex items-center justify-center">
                  @if($item['tip'] === 'email')
                    <svg class="w-7 h-7 text-[#4F6F52]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                  @elseif($item['tip'] === 'phone')
                    <svg class="w-7 h-7 text-[#4F6F52]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                  @elseif($item['tip'] === 'address')
                    <svg class="w-7 h-7 text-[#4F6F52]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                  @elseif($item['tip'] === 'hours')
                    <svg class="w-7 h-7 text-[#4F6F52]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  @endif
                </div>

                {{-- Text --}}
                <div>
                  <p class="text-white text-xl font-extrabold font-manrope leading-6">{{ $item['naslov'] }}</p>
                  <p class="text-white/90 text-base font-jakarta leading-6 mt-1">{{ $item['vrednost'] }}</p>
                </div>

              </div>
            @endforeach
          </div>

          {{-- WhatsApp button --}}
          <a href="https://wa.me/{{ $whatsapp_broj }}" target="_blank" rel="noopener"
             class="mt-10 inline-flex items-center justify-center gap-3 w-full h-16 bg-white/70 hover:bg-white text-[#4F6F52] rounded-[20px] font-bold text-base font-manrope transition-colors duration-300">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            {{ $whatsapp_tekst }}
          </a>

        </div>

      </div>

    </div>

  </div>
</section>