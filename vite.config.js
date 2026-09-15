import { defineConfig, loadEnv } from 'vite'
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';

export default defineConfig(({ mode }) => {
  // Load .env file manually (Vite does not do this by default)
  const env = loadEnv(mode, process.cwd(), '');
  
  // Use APP_URL from .env, fallback to hotel-test.test
  const appUrl = env.APP_URL || 'http://hotel-test.test';
  process.env.APP_URL = appUrl;

  console.log(`[vite] APP_URL: ${appUrl}`);

  return {
    base: '/app/themes/sage/public/build/',
    
    plugins: [
      tailwindcss(),
      laravel({
        input: [
          'resources/css/app.css',
          'resources/js/app.js',
          'resources/css/editor.css',
          'resources/js/editor.js',
        ],
        refresh: true,
        assets: ['resources/images/**', 'resources/fonts/**'],
      }),

      wordpressPlugin(),

      wordpressThemeJson({
        disableTailwindColors: false,
        disableTailwindFonts: false,
        disableTailwindFontSizes: false,
        disableTailwindBorderRadius: false,
      }),
    ],
    
    resolve: {
      alias: {
        '@scripts': '/resources/js',
        '@styles': '/resources/css',
        '@fonts': '/resources/fonts',
        '@images': '/resources/images',
      },
    },

    // Server config for cross-origin access from hotel-test.test
    server: {
      host: '0.0.0.0',
      port: 5173,
      strictPort: true,
      cors: true,
      origin: `${appUrl}:5173`,
      hmr: {
        host: 'hotel-test.test',
        protocol: 'ws',
      },
    },
  };
});