<header id="site-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out px-4 pt-4">
  <div id="header-container" class="max-w-[1060px] mx-auto flex items-center justify-between px-6 py-4 rounded-[20px] transition-all duration-500 bg-transparent">
    
    {{-- Logo --}}
    <a href="{{ home_url('/') }}" class="text-white text-2xl font-bold flex items-center gap-2 transition-colors duration-500" id="header-logo">
      {{ $siteName }}
    </a>

    {{-- Desktop menu --}}
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

    {{-- Book Now --}}
    <a href="{{ home_url('/kontakt/') }}" class="hidden md:inline-block bg-white/70 hover:bg-white text-[#4F7052] px-6 py-3 rounded-[20px] text-base font-bold transition-all duration-500" id="header-btn">
      Rezerviši
    </a>

    {{-- Mobile hamburger button --}}
    <button 
      id="mobile-menu-toggle" 
      class="md:hidden text-white text-2xl relative z-[60] w-10 h-10 flex items-center justify-center"
      aria-label="Open menu" 
      aria-expanded="false"
    >
      <span id="icon-open" class="block">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </span>
      <span id="icon-close" class="hidden">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </span>
    </button>
  </div>
</header>

{{-- Mobile menu overlay --}}
<div id="mobile-menu" class="hidden fixed inset-0 z-40 md:hidden opacity-0 transition-opacity duration-300">
  
  {{-- Backdrop --}}
  <div id="mobile-menu-backdrop" class="absolute inset-0 bg-black/70 backdrop-blur-md"></div>
  
  {{-- Menu panel --}}
  <nav class="absolute top-24 left-4 right-4 bg-[#4F7052] rounded-[24px] p-6 shadow-2xl transform -translate-y-4 transition-transform duration-300">
    
    {{-- Menu links --}}
    @if (has_nav_menu('primary_navigation'))
      <div class="mobile-nav">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex flex-col text-white',
          'container' => false,
          'echo' => false
        ]) !!}
      </div>
    @endif
    
    {{-- Separator --}}
    <div class="h-px bg-white/15 my-5"></div>
    
    {{-- Contact info --}}
    <div class="space-y-3 mb-5">
      <a href="tel:0612222986" class="flex items-center gap-3 text-white/90 hover:text-white transition-colors">
        <span class="flex-shrink-0 w-9 h-9 rounded-full bg-white/10 flex items-center justify-center">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
        </span>
        <span class="text-sm font-medium">061 2222 986</span>
      </a>
      
      <a href="mailto:lipovackaoaza@gmail.com" class="flex items-center gap-3 text-white/90 hover:text-white transition-colors">
        <span class="flex-shrink-0 w-9 h-9 rounded-full bg-white/10 flex items-center justify-center">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
        </span>
        <span class="text-sm font-medium">lipovackaoaza@gmail.com</span>
      </a>
    </div>
    
    {{-- Book Now button --}}
    <a href="{{ home_url('/kontakt/') }}" 
       class="inline-flex items-center justify-center w-full bg-white hover:bg-white/90 text-[#4F7052] px-6 py-4 rounded-[20px] font-bold text-base transition-colors duration-300">
      Rezerviši svoj termin
    </a>
  </nav>
</div>