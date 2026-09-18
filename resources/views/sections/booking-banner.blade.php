{{-- Booking Banner section --}}
@php
  // Sadržaj — klijent kasnije menja po želji
  $naslov    = 'Vreme je da usporite.';
  $opis      = 'Privatni jacuzzi, finska sauna i potpuni mir. Samo 13 km od Beograda.';

  $slika     = 'hero-vila.webp';

  $primary_tekst   = 'Osigurajte svoj termin';
  $primary_url     = '#booking';

  $secondary_tekst = 'Saznajte više';
  $secondary_url   = '#contact';
@endphp

<section class="section bg-white">
  <div class="mx-auto w-full max-w-[1200px] px-5 lg:px-10">

    <div class="relative w-full overflow-hidden rounded-[20px]" style="aspect-ratio: 1120 / 474;">

      {{-- Background image --}}
      <img src="@asset('resources/images/' . $slika)"
           alt="{{ $naslov }}"
           class="absolute inset-0 h-full w-full object-cover" />

      {{-- Dark overlay za čitljivost teksta --}}
      <div class="absolute inset-0 bg-black/40"></div>

      {{-- Content --}}
     <div class="relative flex h-full items-start justify-center px-6 pt-16 pb-10 lg:px-10 lg:pt-20">
        <div class="w-full max-w-[640px] text-center">

        

          {{-- Title --}}
          <h2 class="mt-2 font-manrope text-3xl font-extrabold leading-[1.1] text-white md:text-4xl lg:text-5xl lg:leading-[52.8px]">
            {{ $naslov }}
          </h2>

          {{-- Description --}}
          <p class="mx-auto mt-5 max-w-[624px] font-jakarta text-base font-normal leading-7 text-white">
            {{ $opis }}
          </p>

          {{-- Buttons --}}
          <div class="mt-10 flex flex-wrap items-center justify-center gap-4">

            {{-- Primary --}}
            <a href="{{ $primary_url }}"
               class="inline-flex h-16 w-48 items-center justify-center rounded-[20px] bg-white/70 font-manrope text-base font-bold text-neutral-600 transition-colors duration-300 hover:bg-white">
              {{ $primary_tekst }}
            </a>

            {{-- Secondary --}}
            <a href="{{ $secondary_url }}"
               class="inline-flex h-16 w-40 items-center justify-center rounded-[20px] border border-white/70 font-manrope text-base font-bold text-white/70 transition-colors duration-300 hover:bg-white/10 hover:text-white">
              {{ $secondary_tekst }}
            </a>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>