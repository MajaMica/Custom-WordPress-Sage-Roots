{{-- Footer: 4-column layout with brand, contact, menu, social --}}
<footer class="bg-[#4F7052] text-white">
  <div class="max-w-7xl mx-auto px-6 py-16">
    
    {{-- Main grid: 4 columns on desktop, 1 on mobile --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
      
      {{-- Column 1: Brand & description --}}
      <div class="lg:col-span-1">
        <h3 class="text-3xl font-bold font-manrope mb-4">Lipovačka Oaza</h3>
        <p class="text-white/80 text-sm leading-relaxed mb-6">
          Vaš privatni kutak za odmor, opuštanje i uživanje nadomak Beograda.
        </p>
        <p class="text-white/60 text-xs">
          © {{ date('Y') }} Lipovačka Oaza. Sva prava zadržana.
        </p>
      </div>

      {{-- Column 2: Contact info --}}
      <div>
        <h4 class="text-lg font-semibold mb-5 text-[#EAF0EA]">Kontakt</h4>
        <ul class="space-y-3 text-sm">
          <li class="flex items-start gap-3">
            <span class="text-[#C2A35D] mt-0.5">📍</span>
            <span class="text-white/80">Lipovica, 13 km od Beograda</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#C2A35D] mt-0.5">📧</span>
            <a href="mailto:lipovackaoaza@gmail.com" class="text-white/80 hover:text-white transition">
              lipovackaoaza@gmail.com
            </a>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#C2A35D] mt-0.5">📞</span>
            <a href="tel:+381612222986" class="text-white/80 hover:text-white transition">
              061 2222 986
            </a>
          </li>
        </ul>
      </div>

      {{-- Column 3: Menu links --}}
      <div>
        <h4 class="text-lg font-semibold mb-5 text-[#EAF0EA]">Meni</h4>
        @if (has_nav_menu('primary_navigation'))
          <nav aria-label="Footer navigation">
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'space-y-3 text-sm',
              'container' => false,
              'echo' => false,
              'link_before' => '<span class="text-white/80 hover:text-white transition">',
              'link_after' => '</span>',
            ]) !!}
          </nav>
        @else
          <ul class="space-y-3 text-sm">
            <li><a href="#home" class="text-white/80 hover:text-white transition">Početna</a></li>
            <li><a href="#villa" class="text-white/80 hover:text-white transition">Vila</a></li>
            <li><a href="#gallery" class="text-white/80 hover:text-white transition">Galerija</a></li>
            <li><a href="#contact" class="text-white/80 hover:text-white transition">Kontakt</a></li>
          </ul>
        @endif
      </div>

      {{-- Column 4: Social + note --}}
      <div>
        <h4 class="text-lg font-semibold mb-5 text-[#EAF0EA]">Pratite nas</h4>
        <p class="text-white/70 text-sm leading-relaxed mb-6">
          Za najnovije vesti, dostupnost i posebne ponude.
        </p>
        
        {{-- Social icons --}}
        <div class="flex gap-3">
          <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full bg-[#C2A35D] hover:bg-[#d4b56c] flex items-center justify-center transition">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
            </svg>
          </a>
          <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full bg-[#C2A35D] hover:bg-[#d4b56c] flex items-center justify-center transition">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a href="#" aria-label="Email" class="w-10 h-10 rounded-full bg-[#C2A35D] hover:bg-[#d4b56c] flex items-center justify-center transition">
            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
          </a>
        </div>
      </div>

    </div>

    {{-- Bottom bar: opening date --}}
    <div class="mt-12 pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4">
      <p class="text-white/70 text-sm">
        📅 Otvaranje: <span class="text-white font-semibold">01.12.2026.</span>
      </p>
      <p class="text-white/50 text-xs">
        Dizajn i razvoj — <a href="https://zencode.website" class="hover:text-white transition">zencode.website</a>
      </p>
    </div>

  </div>
</footer>