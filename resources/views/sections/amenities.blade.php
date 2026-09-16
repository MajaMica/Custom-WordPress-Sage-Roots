{{-- Amenities section: 4 key features --}}
<section class="bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Mobile: 2x2 grid | Desktop: centered flex row --}}
    <div class="grid grid-cols-2 gap-6 lg:flex lg:justify-center lg:items-center lg:gap-16">
      @foreach($pogodnosti as $pogodnost)
        <div class="flex flex-col items-center text-center lg:flex-row lg:items-center lg:text-left lg:gap-4">
          <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-[#EAF0EA] flex items-center justify-center text-2xl mb-3 lg:mb-0 shadow-sm">
            {{ $pogodnost['ikonica'] ?: '⭐' }}
          </div>
          <div>
            <h3 class="text-sm lg:text-lg font-extrabold text-gray-900 leading-tight">
              {{ $pogodnost['naslov'] }}
            </h3>
            <p class="text-xs lg:text-sm text-gray-500 mt-0.5">
              {{ $pogodnost['opis'] }}
            </p>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>