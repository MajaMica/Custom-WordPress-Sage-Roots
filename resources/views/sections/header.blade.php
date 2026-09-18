<header id="site-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out px-4 pt-4">
  <div id="header-container" class="max-w-[1060px] mx-auto flex items-center justify-between px-6 py-4 rounded-[20px] transition-all duration-500 bg-transparent">
    
    {{-- Logo --}}
    <a href="{{ home_url('/') }}" class="text-white text-2xl font-bold flex items-center gap-2 transition-colors duration-500" id="header-logo">
      {{ $siteName }}
    </a>

    {{-- menu --}}
    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden md:flex items-center gap-8" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex items-center gap-8 text-white text-base font-normal',
          'container' => false,
          'echo' => false
        ]) !!}
      </nav>
    @endif

    {{-- Book Now  --}}
<a href="{{ home_url('/kontakt/') }}" class="hidden md:inline-block bg-white/70 hover:bg-white text-[#4F7052] px-6 py-3 rounded-[20px] text-base font-bold transition-all duration-500" id="header-btn">
  Rezerviši
</a>

    {{--  (hamburger) --}}
    <button class="md:hidden text-white text-2xl" aria-label="Open menu">
      ☰
    </button>
  </div>
</header>