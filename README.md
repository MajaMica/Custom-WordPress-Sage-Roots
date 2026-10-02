\# Lipovačka Oaza — Custom WordPress Theme



A custom WordPress theme for a private luxury villa rental, built from a Figma design using \*\*Sage (Roots), Blade, Tailwind CSS v4, and Vite\*\*.



🔗 \*\*Live site:\*\* https://lipovackaoaza.com/

⚡ \*\*PageSpeed report:\*\* https://pagespeed.web.dev/analysis/https-lipovackaoaza-com/tfus47lknz?form\_factor=mobile



!\[PageSpeed report](docs/pagespeed.png)



> \*\*100 / 99 PageSpeed Performance — desktop / mobile\*\*

>

> No caching plugin. No page builder. The performance comes primarily from the theme architecture, asset handling, image optimisation, and lean frontend implementation.



\---



\## Overview



Lipovačka Oaza is a custom WordPress website for a private luxury villa rental.



The project started from a \*\*Figma design\*\* and was implemented as a custom Sage theme rather than being built with a page builder.



The main goals were:



\* faithfully translate the Figma design into a production WordPress theme

\* create reusable and editable content sections

\* keep the editing experience simple for the client

\* maintain a clean separation between PHP, Blade templates, and frontend assets

\* achieve strong Core Web Vitals without relying on a caching or optimisation plugin



\---



\## Results



Performance was verified on the live production website using \*\*Google PageSpeed Insights\*\*.



| Device  | Performance |

| ------- | ----------: |

| Desktop |     \*\*100\*\* |

| Mobile  |      \*\*99\*\* |



\### Mobile performance



Tested using \*\*Moto G Power / Slow 4G throttling\*\*:



| Metric                   |    Result |

| ------------------------ | --------: |

| First Contentful Paint   | \*\*1.1 s\*\* |

| Largest Contentful Paint | \*\*2.3 s\*\* |

| Total Blocking Time      |  \*\*0 ms\*\* |

| Cumulative Layout Shift  |     \*\*0\*\* |

| Speed Index              | \*\*1.4 s\*\* |



> Accessibility and SEO were not the primary optimisation targets for this build. The implementation prioritised \*\*performance, Core Web Vitals, and frontend efficiency\*\*.



\---



\## Key Features



\### Figma → Custom WordPress Theme



The design was implemented from Figma as reusable Blade sections and components rather than being recreated with a page builder.



\### Editable Custom Blocks



Page sections are implemented as PHP block classes under `app/Blocks`.



The client can edit content such as text and images directly from the WordPress editor while the block structure and field definitions remain version-controlled in Git.



\### Built-in Fallbacks



Each block includes sensible fallback content.



If an editable field is empty, the template can still render a complete section instead of producing a broken or empty layout.



Content priority:



1\. Value entered by the client

2\. Fallback defined in the Blade template

3\. ACF/SCF `default\_value` when applicable



Example:



```php

public function with(): array

{

&#x20;   return \[

&#x20;       'title' => get\_field('title') ?: 'Default title',

&#x20;   ];

}

```



\### Responsive Hero



The hero section includes:



\* responsive typography

\* gradient overlay

\* optimised hero imagery

\* responsive layout behaviour



\### Scroll-aware Header



The header changes its appearance depending on scroll position:



\* transparent over the hero

\* solid/translucent after scrolling

\* fixed capsule-style variant on selected pages



\### Glassmorphism UI



Subtle glassmorphism details are used for selected interface elements, including translucent surfaces, borders, and backdrop blur.



\### Video Section



The video section uses:



```html

poster

preload="metadata"

```



to avoid unnecessarily loading the full video during the initial page load.



\### Reservation Flow



The site includes a reservation inquiry flow with a direct \*\*WhatsApp shortcut\*\* for contacting the property.



\### No Page Builder



All major sections are implemented directly in Blade and styled with Tailwind CSS.



\---



\## Performance Approach



No caching plugin is used.



Performance was approached at the theme and frontend level:



\* images are served as \*\*WebP\*\* and resized to appropriate display dimensions

\* Vite generates hashed production assets

\* generated assets can therefore be cached efficiently by the browser

\* Tailwind generates only the utilities used by the project

\* below-the-fold images use lazy loading

\* the primary hero image is loaded eagerly when appropriate

\* frontend JavaScript is kept lightweight

\* markup is rendered server-side through Blade

\* unnecessary plugins and page-builder layers are avoided



The goal was to make the website fast \*\*by design\*\*, rather than relying on a final optimisation layer to compensate for a heavy implementation.



\---



\## Tech Stack



| Technology                     | Purpose                                       |

| ------------------------------ | --------------------------------------------- |

| \*\*WordPress\*\*                  | CMS                                           |

| \*\*Sage (Roots)\*\*               | Theme architecture / starter                  |

| \*\*Laravel Blade\*\*              | Templating                                    |

| \*\*Tailwind CSS v4\*\*            | Styling                                       |

| \*\*Vite\*\*                       | Asset bundling / development / HMR            |

| \*\*Acorn\*\*                      | Laravel-style application layer for WordPress |

| \*\*ACF Composer\*\*               | Code-based block architecture                 |

| \*\*Secure Custom Fields (SCF)\*\* | Editable custom fields                        |

| \*\*Composer\*\*                   | PHP dependencies                              |

| \*\*Yarn\*\*                       | JavaScript dependencies                       |



\---



\## Why Secure Custom Fields (SCF)?



This project uses \*\*Secure Custom Fields (SCF)\*\* instead of ACF Pro.



SCF is the free, WordPress-maintained fork of Advanced Custom Fields and provides a compatible API for the field functionality used by this project.



The project does not depend on ACF Pro-specific Repeater or Gallery fields.



Where a repeater/gallery structure would normally be useful, content is handled through:



\* individual fields

\* multiple single-image fields

\* Blade fallbacks

\* static content where appropriate



This keeps the project compatible with the free field-management setup used for the client website.



\---



\## Block Architecture



Each editable section follows a simple three-file structure:



```text

app/

└── Blocks/

&#x20;   └── BookingBanner.php



resources/

└── views/

&#x20;   ├── blocks/

&#x20;   │   └── booking-banner.blade.php

&#x20;   │

&#x20;   └── sections/

&#x20;       └── booking-banner.blade.php

```



\### Responsibilities



\*\*Block class\*\*



```text

app/Blocks/BookingBanner.php

```



Defines the block and its fields.



\*\*Bridge template\*\*



```text

resources/views/blocks/booking-banner.blade.php

```



Connects the registered block with the corresponding section template.



\*\*Section template\*\*



```text

resources/views/sections/booking-banner.blade.php

```



Contains the actual HTML structure and Tailwind classes.



This keeps the block registration logic separate from the presentation layer.



\### Content Flow



```text

WordPress Editor

&#x20;      ↓

&#x20;    SCF

&#x20;      ↓

&#x20; Block Class

&#x20;      ↓

&#x20;Blade Section

&#x20;      ↓

&#x20;Rendered HTML

```



When a field is empty:



```text

Client value

&#x20;    ↓

if available → render it



otherwise

&#x20;    ↓

Blade fallback

```



This allows the frontend to remain functional even when optional content has not been entered.



\---



\## Project Structure



```text

app/

├── Blocks/             # Custom block classes

├── setup.php           # Theme setup and filters

└── ...



resources/

├── css/

│   └── app.css         # Tailwind entry

├── js/

│   └── app.js          # Frontend JavaScript

├── images/             # Theme images

└── views/

&#x20;   ├── blocks/         # Block bridge templates

&#x20;   ├── sections/       # Section markup

&#x20;   └── layouts/        # Base layouts



public/

└── build/              # Compiled Vite assets

```



> `public/build/` contains generated production assets and is not committed to the repository.



\---



\## Getting Started



\### Requirements



\* PHP 8.x

\* Node.js 18+

\* Composer

\* Yarn

\* Local WordPress installation

\* Secure Custom Fields (SCF)



\### Installation



Clone the theme into:



```text

wp-content/themes/

```



```bash

git clone https://github.com/MajaMica/Custom-WordPress-Sage-Roots.git



cd Custom-WordPress-Sage-Roots



composer install



yarn install

```



\### Development



Start the Vite development environment:



```bash

yarn dev

```



Build production assets:



```bash

yarn build

```



Then activate the theme from:



\*\*WordPress → Appearance → Themes\*\*



\---



\## Development Workflow



The project uses Git for version control and Vite for the frontend development workflow.



A typical development cycle is:



```text

Figma

&#x20; ↓

Blade / Tailwind implementation

&#x20; ↓

SCF editable fields

&#x20; ↓

Local development

&#x20; ↓

Vite production build

&#x20; ↓

WordPress deployment

&#x20; ↓

PageSpeed / Core Web Vitals verification

```



This keeps the design, theme code, editable content structure, and compiled frontend assets separated and maintainable.



\---



\## Project Highlights



\* Custom WordPress theme built from a Figma design

\* Sage / Roots architecture

\* Blade-based component structure

\* Tailwind CSS v4

\* Vite asset pipeline

\* Code-defined editable blocks

\* SCF-based WordPress editing experience

\* Responsive custom frontend

\* No page builder

\* No caching plugin

\* WebP image optimisation

\* \*\*100 desktop / 99 mobile PageSpeed Performance\*\*

\* \*\*0 ms Total Blocking Time\*\*

\* \*\*0 CLS\*\*

\* Production deployment and performance verification



\---



\## License



This repository is intended primarily as a \*\*portfolio and technical demonstration\*\*.



The client website and its content remain the property of the respective client.



The code in this repository may contain project-specific implementation details and should not be reused as a production theme without reviewing and adapting it for the intended environment.



