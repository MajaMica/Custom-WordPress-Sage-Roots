{{-- Gallery section: header + 1 large + 2 small image cards --}}
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    
    {{-- Section header --}}
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
      <div>
        <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-2">Pogledaj izbliza</p>
        <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope">
          Svaki kutak Oaze,<br>vaš za istraživanje
        </h2>
      </div>
      
      <a href="#tour" class="inline-flex items-center justify-center bg-[#4F6F52] hover:bg-[#3d5a40] text-white px-6 py-4 rounded-[20px] font-bold text-sm md:text-base transition duration-300 self-start md:self-auto">
        Pogledaj cijelu vilu
      </a>
    </div>

    {{-- Large image card --}}
    <div class="relative rounded-[20px] overflow-hidden h-[400px] md:h-[600px] lg:h-[720px] mb-6 group">
      <img 
        src="@asset('resources/images/hero-vila.webp')" 
        alt="Lipovačka Oaza - pogled na bazen" 
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
      />
      
      {{-- Dark gradient at bottom --}}
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
      
      {{-- Badge top-left --}}
      <div class="absolute top-6 left-6 md:top-10 md:left-10 bg-[#C2A35D] text-white px-5 py-2 rounded-[20px] text-sm font-bold">
        Pogled na bazen
      </div>

      {{-- Bottom content --}}
      <div class="absolute bottom-6 left-6 right-6 md:bottom-10 md:left-10 md:right-10 text-white">
        <h3 class="text-2xl md:text-3xl font-extrabold font-manrope mb-3">
          Dvorište i bazen
        </h3>
        <p class="text-white/85 text-sm md:text-base leading-relaxed mb-5 max-w-lg">
          Privatni bazen sa osvetljenjem, natkrivena terasa i prostor za opuštanje — sve na jednom mestu, samo za vas.
        </p>
        
        {{-- Feature icons --}}
        <div class="flex flex-wrap gap-x-6 gap-y-2 text-sm">
          <span class="flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-[#C2A35D]"></span>
            <span class="text-white/80">80 m²</span>
          </span>
          <span class="flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-[#C2A35D]"></span>
            <span class="text-white/80">Roštilj</span>
          </span>
          <span class="flex items-center gap-2">
            <span class="w-5 h-5 rounded-full bg-[#C2A35D]"></span>
            <span class="text-white/80">Ležaljke</span>
          </span>
        </div>
      </div>
    </div>

    {{-- Grid: 2 smaller image cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      {{-- Card 1: Bathroom --}}
      <div class="relative rounded-[20px] overflow-hidden h-[400px] md:h-[500px] lg:h-[720px] group">
        <img 
          src="@asset('resources/images/bathroom.webp')" 
          alt="Lipovačka Oaza - kupatilo" 
          class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
        />
        
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        
        <div class="absolute top-6 left-6 bg-[#C2A35D] text-white px-5 py-2 rounded-[20px] text-sm font-bold">
          Kupatilo
        </div>

        <div class="absolute bottom-6 left-6 right-6 text-white">
          <h3 class="text-xl md:text-2xl font-extrabold font-manrope mb-2">
            Moderno kupatilo
          </h3>
          <p class="text-white/85 text-sm leading-relaxed mb-4">
            Elegantno kupatilo sa tušem, sofisticiranim pločicama i pažljivo biranim detaljima.
          </p>
          
          <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs">
            <span class="flex items-center gap-2">
              <span class="w-4 h-4 rounded-full bg-[#C2A35D]"></span>
              <span class="text-white/80">10 m²</span>
            </span>
            <span class="flex items-center gap-2">
              <span class="w-4 h-4 rounded-full bg-[#C2A35D]"></span>
              <span class="text-white/80">Tuš kabina</span>
            </span>
          </div>
        </div>
      </div>

      {{-- Card 2: Bedroom --}}
      <div class="relative rounded-[20px] overflow-hidden h-[400px] md:h-[500px] lg:h-[720px] group">
        <img 
          src="@asset('resources/images/bedroom1.webp')" 
          alt="Lipovačka Oaza - spavaća soba" 
          class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
        />
        
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        
        <div class="absolute top-6 left-6 bg-[#C2A35D] text-white px-5 py-2 rounded-[20px] text-sm font-bold">
          Spavaća soba
        </div>

        <div class="absolute bottom-6 left-6 right-6 text-white">
          <h3 class="text-xl md:text-2xl font-extrabold font-manrope mb-2">
            Glavna spavaća soba
          </h3>
          <p class="text-white/85 text-sm leading-relaxed mb-4">
            Prostrana soba sa bračnim krevetom, pogledom na dvorište i potpunim mirom.
          </p>
          
          <div class="flex flex-wrap gap-x-5 gap-y-2 text-xs">
            <span class="flex items-center gap-2">
              <span class="w-4 h-4 rounded-full bg-[#C2A35D]"></span>
              <span class="text-white/80">25 m²</span>
            </span>
            <span class="flex items-center gap-2">
              <span class="w-4 h-4 rounded-full bg-[#C2A35D]"></span>
              <span class="text-white/80">Bračni krevet</span>
            </span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>