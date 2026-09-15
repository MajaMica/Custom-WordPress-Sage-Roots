<section class="relative w-full h-[90vh] min-h-[600px] flex items-center justify-center overflow-hidden">
    {{-- Background image --}}
    <img src="@asset('images/hero-vila.webp')" alt="Lipovačka Oaza" class="absolute inset-0 w-full h-full object-cover z-0" />
    {{-- Gradient overlay for text readability --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/90 z-10"></div>

    {{-- Content wrapper --}}
    <div class="relative z-20 w-full max-w-7xl mx-auto px-6 h-full flex flex-col justify-between pt-32 pb-16">
        
        {{-- Top: Main headline --}}
        <div class="max-w-3xl">
            <p class="text-[#4F7052] bg-white/90 inline-block px-4 py-1 rounded-full text-sm font-semibold mb-6">
                📍 13 km od Beograda
            </p>
            <h1 class="text-white text-4xl md:text-6xl lg:text-7xl font-bold leading-tight font-manrope">
                Vaš privatni SPA beg<br>iz grada.
            </h1>
        </div>

        {{-- Bottom: Description and CTA buttons --}}
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-8 w-full">
            
            {{-- Watermark text --}}
            <div class="absolute bottom-0 left-0 opacity-10 pointer-events-none select-none">
                <span class="text-[120px] md:text-[220px] font-bold text-white font-manrope leading-none">Oaza</span>
            </div>

            {{-- Description and CTA buttons --}}
            <div class="relative z-30 max-w-xl w-full">
                <p class="text-white/90 text-lg md:text-xl font-light mb-6 leading-relaxed">
                    Privatni jacuzzi, finska sauna i potpuni mir — samo za vas. Bez gužve, bez deljenja prostora, bez žurbe.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="#booking" class="bg-[#4F7052] hover:bg-[#3d5a40] text-white px-8 py-4 rounded-[20px] font-bold transition duration-300">
                        Rezerviši svoj termin
                    </a>
                    <a href="#villa" class="border border-white text-white hover:bg-white hover:text-[#4F7052] px-8 py-4 rounded-[20px] font-bold transition duration-300">
                        Istraži vilu
                    </a>
                </div>

                <p class="text-white/70 text-sm mt-4">
                    📅 Otvaranje: 01.12.2026.
                </p>
            </div>
        </div>
    </div>
</section>