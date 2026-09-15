<section class="relative w-full h-[90vh] min-h-[600px] flex items-center justify-center overflow-hidden">
    {{-- Background image --}}
    <img src="https://placehold.co/1920x1080" alt="Villa Karaya" class="absolute inset-0 w-full h-full object-cover z-0" />
    
    {{-- Gradient overlay for text readability --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/90 via-transparent to-black z-10"></div>

    {{-- Content wrapper --}}
    <div class="relative z-20 w-full max-w-7xl mx-auto px-6 h-full flex flex-col justify-between pt-32 pb-16">
        
        {{-- Top: Main headline --}}
        <div class="max-w-2xl">
            <h1 class="text-white text-5xl md:text-7xl font-bold leading-tight font-manrope">
                One Villa. Infinite <br>Memories. Yours <br>Alone.
            </h1>
        </div>

        {{-- Bottom: Watermark, description and buttons --}}
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-8 w-full">
            
            {{-- Watermark text --}}
            <div class="absolute bottom-0 left-0 opacity-10 pointer-events-none select-none">
                <span class="text-[150px] md:text-[250px] font-bold text-white font-manrope leading-none">Karaya</span>
            </div>

            {{-- Description and CTA buttons --}}
            <div class="relative z-30 max-w-md w-full">
                <p class="text-white/90 text-lg font-light mb-6 leading-relaxed">
                    A secluded luxury villa in the heart of Bali — crafted for those who want more than a stay.
                </p>
                
                <div class="flex flex-wrap gap-4">
                    <a href="/book-now" class="bg-white/80 hover:bg-white text-[#4F7052] px-8 py-4 rounded-[20px] font-bold transition duration-300">
                        Book Your Stay
                    </a>
                    <a href="/explore" class="border border-white text-white hover:bg-white hover:text-[#4F7052] px-8 py-4 rounded-[20px] font-bold transition duration-300">
                        Explore
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>