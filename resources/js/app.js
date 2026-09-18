document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('header-container');
  const headerWrapper = document.getElementById('site-header');

  if (!header || !headerWrapper) return;

  // Skip scroll animation if page uses capsule header by default
  if (document.body.classList.contains('header-capsule')) {
    return;
  }

  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      // Scrolled down: capsule
      header.classList.add('bg-[#4F7052]/95', 'backdrop-blur-md', 'shadow-xl');
      header.classList.remove('bg-transparent');

      headerWrapper.classList.remove('pt-4');
      headerWrapper.classList.add('pt-0');
    } else {
      // At top: transparent
      header.classList.remove('bg-[#4F7052]/95', 'backdrop-blur-md', 'shadow-xl');
      header.classList.add('bg-transparent');

      headerWrapper.classList.add('pt-4');
      headerWrapper.classList.remove('pt-0');
    }
  });
});
/* Mobile menu toggle with animation */
document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.getElementById('mobile-menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconOpen = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');
  const backdrop = document.getElementById('mobile-menu-backdrop');
  const menuPanel = mobileMenu ? mobileMenu.querySelector('nav') : null;

  if (!toggleBtn || !mobileMenu) return;

  function openMenu() {
    mobileMenu.classList.remove('hidden');
    
    // Force reflow for animation
    requestAnimationFrame(() => {
      mobileMenu.classList.remove('opacity-0');
      mobileMenu.classList.add('opacity-100');
      if (menuPanel) {
        menuPanel.classList.remove('-translate-y-4');
        menuPanel.classList.add('translate-y-0');
      }
    });
    
    iconOpen.classList.add('hidden');
    iconClose.classList.remove('hidden');
    toggleBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileMenu.classList.remove('opacity-100');
    mobileMenu.classList.add('opacity-0');
    if (menuPanel) {
      menuPanel.classList.remove('translate-y-0');
      menuPanel.classList.add('-translate-y-4');
    }
    
    // After animation, hide
    setTimeout(() => {
      mobileMenu.classList.add('hidden');
    }, 300);
    
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
    toggleBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  function toggleMenu() {
    if (mobileMenu.classList.contains('hidden')) {
      openMenu();
    } else {
      closeMenu();
    }
  }

  toggleBtn.addEventListener('click', toggleMenu);
  if (backdrop) backdrop.addEventListener('click', closeMenu);
  
  // Close menu when clicking a link
  if (menuPanel) {
    menuPanel.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });
  }
});