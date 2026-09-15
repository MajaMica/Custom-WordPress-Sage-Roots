{{-- Booking section: inquiry form with left info and right form card --}}
<section id="booking" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      
      {{-- Left: Info and benefits --}}
      <div class="lg:sticky lg:top-32">
        
        <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-3">Rezervišite boravak</p>
        
        <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope mb-6">
          Spremni da<br>Oaza bude vaša?
        </h2>
        
        <p class="text-[#727971] text-base md:text-lg leading-relaxed mb-8">
          Recite nam kada želite da dođete i koliko gostiju dolazi. Odgovorićemo vam lično u roku od 24 sata — bez automatskih sistema.
        </p>

        {{-- Benefits list --}}
        <ul class="space-y-4 mb-10">
          <li class="flex items-start gap-3">
            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#4F6F52] flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </span>
            <span class="text-[#727971] text-base">Upit je potpuno besplatan — bez plaćanja unapred</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#4F6F52] flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </span>
            <span class="text-[#727971] text-base">Lični odgovor u roku od 24 sata</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#4F6F52] flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </span>
            <span class="text-[#727971] text-base">Bez obaveze dok ne potvrdite termin</span>
          </li>
        </ul>

        {{-- WhatsApp button --}}
        <a href="https://wa.me/381612222986" 
           target="_blank" 
           rel="noopener"
           class="inline-flex items-center justify-center gap-3 border-2 border-[#4F7052] text-[#4F7052] hover:bg-[#4F7052] hover:text-white px-6 py-4 rounded-[20px] font-bold transition duration-300 w-full md:w-auto">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
          </svg>
          Pisite nam na WhatsApp
        </a>

      </div>

      {{-- Right: Inquiry form card --}}
      <div class="bg-white rounded-[40px] border border-black/10 p-6 md:p-10 shadow-lg">
        
        {{-- Card header --}}
        <div class="mb-8">
          <h3 class="text-[#4F6F52] text-2xl font-extrabold font-manrope mb-2">Pošaljite upit</h3>
          <p class="text-[#727971] text-base">Proverićemo dostupnost i prilagoditi vaš boravak.</p>
        </div>

        {{-- Form --}}
        <form action="#" method="POST" class="space-y-4">
          @csrf
          
          {{-- Row 1: Name + Email --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input 
              type="text" 
              name="name" 
              placeholder="Ime i prezime" 
              required
              class="w-full px-4 py-3 border border-gray-200 rounded-[10px] text-sm focus:outline-none focus:border-[#4F7052] transition"
            />
            <input 
              type="email" 
              name="email" 
              placeholder="Email adresa" 
              required
              class="w-full px-4 py-3 border border-gray-200 rounded-[10px] text-sm focus:outline-none focus:border-[#4F7052] transition"
            />
          </div>

          {{-- Row 2: Date + Phone --}}
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input 
              type="date" 
              name="date" 
              class="w-full px-4 py-3 border border-gray-200 rounded-[10px] text-sm focus:outline-none focus:border-[#4F7052] transition text-gray-500"
            />
            <input 
              type="tel" 
              name="phone" 
              placeholder="Telefon / WhatsApp" 
              class="w-full px-4 py-3 border border-gray-200 rounded-[10px] text-sm focus:outline-none focus:border-[#4F7052] transition"
            />
          </div>

          {{-- Message --}}
          <textarea 
            name="message" 
            rows="4"
            placeholder="Recite nam o vašem idealnom boravku — datumi, broj gostiju, posebne prilike..."
            class="w-full px-4 py-3 border border-gray-200 rounded-[10px] text-sm focus:outline-none focus:border-[#4F7052] transition resize-none"
          ></textarea>

          {{-- Submit button --}}
          <button 
            type="submit" 
            class="w-full bg-[#4F7052] hover:bg-[#3d5a40] text-white py-4 rounded-[17px] font-semibold text-base transition duration-300">
            Pošaljite upit
          </button>

          {{-- Trust badges --}}
          <div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 pt-4">
            <span class="flex items-center gap-2 text-xs text-[#727971]">
              <span class="w-4 h-4 rounded-full bg-[#4F6F52]"></span>
              Bez plaćanja danas
            </span>
            <span class="flex items-center gap-2 text-xs text-[#727971]">
              <span class="w-4 h-4 rounded-full bg-[#4F6F52]"></span>
              Besplatan upit
            </span>
            <span class="flex items-center gap-2 text-xs text-[#727971]">
              <span class="w-4 h-4 rounded-full bg-[#4F6F52]"></span>
              Odgovor u 24h
            </span>
          </div>

        </form>

      </div>

    </div>

  </div>
</section>