{{-- Video Tour section: title + video player --}}
<section class="section bg-[#F5F0E8] border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Header --}}
    <div class="text-center mb-12 lg:mb-16">
      <p class="text-[#C9A96E] text-sm uppercase tracking-wider mb-3">
        {{ $eyebrow }}
      </p>
      <h2 class="text-[#4F7052] text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight font-manrope mb-4">
        {{ $naslov }}
      </h2>
      <p class="text-[#727971] text-base md:text-lg leading-relaxed max-w-2xl mx-auto">
        {{ $podnaslov }}
      </p>
    </div>

    {{-- Video player --}}
    <div class="max-w-4xl mx-auto">
      <video
        class="w-full rounded-2xl shadow-2xl bg-black"
        autoplay
        muted
        loop
        playsinline
        controls
        preload="metadata"
        poster="@asset('resources/images/hero-vila.webp')"
      >
        <source src="http://hotel-test.test/wp-content/uploads/2026/09/oaza.mp4" type="video/mp4">
        Vaš browser ne podržava video tag.
      </video>
    </div>

  </div>
</section>