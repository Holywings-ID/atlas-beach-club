# ABC — Luxury Beachfront Experience

A Laravel 13 + Livewire 4 website for a luxury beachfront venue featuring daybeds, dining, a pool bar, events, offers, reservations, and support.

## Tech Stack

- **PHP 8.3** / **Laravel 13**
- **Livewire 4** — reactive components (forms, FAQ accordion)
- **Alpine.js** — lightweight JS interactions (mobile menu)
- **Tailwind CSS 3** — utility-first styling
- **Vite 8** — asset bundling
- **SQLite** — default database

## Getting Started

```bash
composer setup     # install deps, generate key, migrate, build assets
composer dev       # start server + queue + logs + vite in parallel
```

## Project Structure

```
abc-html/
├── app/                        # Application logic
│   ├── Http/Controllers/
│   │   └── PageController.php  # Returns views for all 9 pages (home, daybed, dining, etc.)
│   ├── Livewire/
│   │   ├── ContactForm.php     # Contact form with validation (name, email, message)
│   │   ├── FaqAccordion.php    # FAQ data & rendering (hardcoded Q&A pairs)
│   │   └── ReservationForm.php # Reservation form with validation (name, email, phone, date, guests, notes)
│   ├── Models/
│   │   └── User.php            # Default Laravel User model
│   └── Providers/
│       └── AppServiceProvider.php
│
├── assets/                     # Source assets (images, logos) — NOT public-facing
│   ├── image/
│   └── logo/
│
├── bootstrap/                  # Laravel bootstrap & cached config
│
├── config/                     # Laravel configuration files
│   ├── app.php                 # App name, timezone, locale
│   ├── database.php            # DB connections (SQLite default)
│   ├── mail.php                # Mail driver config
│   └── ...                     # auth, cache, filesystems, logging, queue, services, session
│
├── database/
│   ├── factories/              # Model factories (UserFactory)
│   ├── migrations/             # DB schema (users, cache, jobs tables)
│   ├── seeders/                # DatabaseSeeder
│   └── database.sqlite         # SQLite database file
│
├── public/                     # Web root — publicly accessible files
│   ├── assets/
│   │   ├── image/              # Public images (header, highlights, etc.)
│   │   └── logo/
│   ├── index.php               # Application entry point
│   ├── .htaccess               # Apache URL rewriting
│   ├── favicon.ico
│   └── robots.txt
│
├── resources/                  # Frontend source files
│   ├── css/
│   │   └── app.css             # Main stylesheet (Tailwind imports + custom styles)
│   ├── js/
│   │   ├── app.js              # Main JS entry point
│   │   └── bootstrap.js        # Axios setup
│   └── views/
│       ├── components/         # Blade components (reusable UI pieces)
│       │   ├── layouts/
│       │   │   └── app.blade.php       # Master layout — includes header, footer, Livewire, Vite
│       │   ├── header.blade.php        # Sticky top nav with desktop links + mobile toggle
│       │   ├── mobile-menu.blade.php   # Full-screen mobile nav (Alpine.js slide-in)
│       │   ├── footer.blade.php        # 4-column footer with quick links
│       │   ├── hero.blade.php          # Hero banner with background image, title, optional CTA
│       │   ├── video.blade.php         # Full-screen video hero (desktop/mobile sources + overlay text)
│       │   └── contact.blade.php   # Floating scroll-to-top button
│       ├── livewire/           # Livewire component templates
│       │   ├── contact-form.blade.php      # Contact form UI with validation errors + success state
│       │   ├── reservation-form.blade.php  # Reservation form UI (name, email, phone, date, guests, notes)
│       │   └── faq-accordion.blade.php     # Expandable FAQ list using <details> elements
│       └── pages/              # Page views (one per route)
│           ├── home.blade.php      # Homepage — video hero + feature cards grid
│           ├── daybed.blade.php    # Daybed experience page
│           ├── dining.blade.php    # Dining page
│           ├── poolbar.blade.php   # Pool bar page
│           ├── explore.blade.php   # Explore page
│           ├── whatson.blade.php    # What's On / events page
│           ├── offer.blade.php     # Offers / deals page
│           ├── support.blade.php   # FAQ accordion + contact form
│           └── reserve.blade.php   # Reservation form
│
├── routes/
│   ├── web.php                 # All 9 GET routes → PageController methods
│   └── console.php             # Artisan console commands
│
├── storage/                    # App-generated files (logs, cache, sessions)
│   ├── app/
│   ├── framework/              # Cache, sessions, views
│   └── logs/
│
├── tests/
│   ├── Feature/                # Feature/integration tests
│   ├── Unit/                   # Unit tests
│   └── TestCase.php
│
├── composer.json               # PHP dependencies & scripts (setup, dev, test)
├── package.json                # Node dependencies (Tailwind, Vite, Axios)
├── vite.config.js              # Vite config with Laravel plugin
├── tailwind.config.js          # Tailwind CSS configuration
└── postcss.config.js           # PostCSS config
```

## Routes

| URL | Name | Description |
|---|---|---|
| `/` | home | Homepage with video hero & feature cards |
| `/daybed` | daybed | Daybed experience |
| `/dining` | dining | Dining experience |
| `/pool-bar` | poolbar | Pool bar experience |
| `/explore` | explore | Explore the venue |
| `/whats-on` | whatson | Events & entertainment |
| `/offer` | offer | Special offers |
| `/support` | support | FAQ + contact form |
| `/reserve` | reserve | Reservation form |

## How It Fits Together

1. A request hits `routes/web.php` → `PageController` returns the matching Blade view from `resources/views/pages/`
2. Each page view uses `<x-layouts.app>` as the master layout, which wraps content with the header, mobile menu, footer, and contact button
3. Pages use Blade components (`<x-hero>`, `<x-video>`) for reusable hero sections
4. Interactive features (contact form, reservation form, FAQ) are Livewire components — server-rendered with real-time validation, no full page reloads
5. The mobile menu uses Alpine.js for slide-in/out transitions
6. Vite compiles Tailwind CSS and JS assets during development and for production builds
