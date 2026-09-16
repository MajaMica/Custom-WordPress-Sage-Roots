{{-- Included features: additional amenities --}}
<section class="bg-white">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Section header --}}
    <div class="max-w-3xl mb-12">
      <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-3">
        {{ $eyebrow }}
      </p>
      <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope mb-4">
        {{ $naslov }}
      </h2>
      <p class="text-[#727971] text-base md:text-lg leading-relaxed">
        {{ $podnaslov }}
      </p>
    </div>

    {{-- Desktop: 4-column grid --}}
    <div class="hidden lg:grid lg:grid-cols-4 gap-4">
      @foreach($features as $feature)
        <div class="flex items-center gap-4 bg-white border border-black/10 rounded-xl px-6 py-5 hover:shadow-md hover:border-[#4F7052]/30 transition-all duration-300">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#EAF0EA] flex items-center justify-center text-xl">
            {{ $feature['ikonica'] ?: '✓' }}
          </div>
          <span class="text-[#1D1C17] text-sm md:text-base font-medium">
            {{ $feature['tekst'] }}
          </span>
        </div>
      @endforeach
    </div>

    {{-- Mobile: horizontal slider --}}
    <div class="lg:hidden">
      <div id="included-slider" class="flex gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 -mx-6 px-6">
        @foreach($features as $feature)
          <div class="flex items-center gap-4 bg-white border border-black/10 rounded-xl px-6 py-5 flex-shrink-0 w-[85%] snap-center">
            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#EAF0EA] flex items-center justify-center text-xl">
              {{ $feature['ikonica'] ?: '✓' }}
            </div>
            <span class="text-[#1D1C17] text-sm font-medium">
              {{ $feature['tekst'] }}
            </span>
          </div>
        @endforeach
      </div>

      {{-- Dots indicator --}}
      <div class="flex justify-center gap-2 mt-4">
        @foreach($features as $index => $feature)
          <button
            type="button"
            data-slide="{{ $index }}"
            class="included-dot w-2 h-2 rounded-full bg-gray-300 transition-all duration-300 {{ $index === 0 ? 'bg-[#4F7052] w-6' : '' }}"
            aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('included-slider');
    const dots = document.querySelectorAll('.included-dot');
    
    if (!slider || !dots.length) return;

    // Update dots on scroll
    slider.addEventListener('scroll', function() {
      const slideWidth = slider.scrollWidth / dots.length;
      const currentIndex = Math.round(slider.scrollLeft / slideWidth);
      
      dots.forEach((dot, i) => {
        if (i === currentIndex) {
          dot.classList.add('bg-[#4F7052]', 'w-6');
          dot.classList.remove('bg-gray-300');
        } else {
          dot.classList.remove('bg-[#4F7052]', 'w-6');
          dot.classList.add('bg-gray-300');
        }
      });
    });

    // Click on dot → scroll to slide
    dots.forEach(dot => {
      dot.addEventListener('click', function() {
        const index = parseInt(this.dataset.slide);
        const slideWidth = slider.scrollWidth / dots.length;
        slider.scrollTo({ left: slideWidth * index, behavior: 'smooth' });
      });
    });
  });
</script>