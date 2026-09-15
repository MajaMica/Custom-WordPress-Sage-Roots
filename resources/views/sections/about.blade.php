{{-- About the villa section: image + stats + text --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      {{-- Left: Image with stats overlay --}}
      <div class="relative">
        <div class="relative rounded-[20px] overflow-hidden h-[500px] lg:h-[691px]">
          <img 
            src="@asset('resources/images/livingroom.webp')" 
            alt="Lipovačka Oaza - kupatilo" 
            class="w-full h-full object-cover"
          />
          
          {{-- Stats overlay at bottom of image --}}
          <div class="absolute bottom-6 left-6 right-6 bg-black/25 backdrop-blur-sm rounded-xl p-5">
            <div class="grid grid-cols-3 gap-2 text-center text-white">
              
              <div class="border-r border-white/10">
                <div class="text-2xl font-extrabold font-manrope">130</div>
                <div class="text-xs text-white/50 mt-1">m² prostora</div>
              </div>
              
              <div class="border-r border-white/10">
                <div class="text-2xl font-extrabold font-manrope">6</div>
                <div class="text-xs text-white/50 mt-1">osoba</div>
              </div>
              
              <div>
                <div class="text-2xl font-extrabold font-manrope">13km</div>
                <div class="text-xs text-white/50 mt-1">od Beograda</div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      {{-- Right: Text content --}}
      <div class="bg-white lg:pl-8">
        
        <h2 class="text-[#4F7052] text-4xl md:text-5xl font-extrabold leading-tight font-manrope mb-6">
          Nije samo vila.<br>Ceo jedan svet.
        </h2>

        <div class="space-y-6 text-[#727971] text-base md:text-lg leading-relaxed">
          <p>
            Smeštena u zelenilu Lipovice, Lipovačka Oaza je utočište prostora, tišine i sofisticiranosti. Samo 13 kilometara od Beograda — dovoljno blizu za beg, dovoljno daleko da zaboravite na gradsku vrevu.
          </p>
          <p>
            Sa dve prostrane spavaće sobe, privatnim jacuzzijem i finskom saunom, Oaza nije samo smeštaj. To je najlepša verzija vašeg odmora — rezervisana samo za vas.
          </p>
        </div>

        {{-- CTA link --}}
        <a href="#villa" class="inline-flex items-center gap-2 text-[#4F7052] font-bold mt-8 hover:gap-3 transition-all duration-300">
          Saznaj više
          <span>→</span>
        </a>

      </div>

    </div>
  </div>
</section>