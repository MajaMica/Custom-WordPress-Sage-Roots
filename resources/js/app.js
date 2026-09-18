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