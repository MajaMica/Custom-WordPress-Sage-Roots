{{-- Amenities section: 4 key features --}}
<section class="py-12 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach($pogodnosti as $pogodnost)
        <div class="flex flex-col items-center text-center lg:border-r lg:border-gray-200 lg:pr-6 last:lg:border-r-0">
          <div class="flex-shrink-0 w-14 h-14 rounded-full bg-[#4F7052]/10 flex items-center justify-center mb-3 text-2xl">
            {{ $pogodnost['ikonica'] ?: '⭐' }}
          </div>
          <h3 class="text-base font-extrabold text-gray-900 leading-tight">
            {{ $pogodnost['naslov'] }}
          </h3>
          <p class="text-xs text-gray-500 mt-1">
            {{ $pogodnost['opis'] }}
          </p>
        </div>
      @endforeach
    </div>

  </div>
</section>