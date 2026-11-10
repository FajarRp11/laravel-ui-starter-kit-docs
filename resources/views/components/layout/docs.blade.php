@props([
    'title' => null,
])

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{
        dark: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        sidebarOpen: false,
        toggleTheme() {
            this.dark = !this.dark;
            localStorage.setItem('theme', this.dark ? 'dark' : 'light');
            if (this.dark) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }"
    x-init="
        if (dark) document.documentElement.classList.add('dark');
        else document.documentElement.classList.remove('dark');
    "
    :class="{ 'dark': dark }"
    class="h-full scroll-smooth"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? "{$title} - " : '' }}Blade UI Docs</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js"></script>
        <style type="text/tailwindcss">
            @theme {
                --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                --font-mono: 'JetBrains Mono', ui-monospace, monospace;
            }
            @custom-variant dark (&:where(.dark, .dark *));
        </style>
    @endif

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-screen bg-background text-text font-sans antialiased transition-colors duration-150 flex flex-col">

    {{-- Top Navbar --}}
    <header class="sticky top-0 z-40 w-full border-b border-border bg-surface/95 backdrop-blur-sm">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-3">
                <button
                    type="button"
                    @click="sidebarOpen = !sidebarOpen"
                    class="lg:hidden p-2 rounded-md text-text-muted hover:text-text hover:bg-surface-muted focus:outline-none"
                    aria-label="Toggle menu"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <a href="{{ route('docs.index') }}" class="flex items-center gap-2.5">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary text-primary-foreground font-bold text-base shadow-sm">
                        ⚡
                    </div>
                    <span class="font-bold text-lg text-text tracking-tight">Blade UI <span class="text-primary-text font-medium text-sm">Docs</span></span>
                </a>

                <span class="hidden sm:inline-flex items-center gap-1.5 ml-2 px-2.5 py-0.5 rounded-full text-xs font-mono font-medium bg-surface-muted text-text-muted border border-border">
                    <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                    <span>v0.1 · kit: {{ config('docs.kit_hash', 'unknown') }}</span>
                </span>
            </div>

            <div class="flex items-center gap-2">
                {{-- Dark Mode Toggle --}}
                <button
                    type="button"
                    @click="toggleTheme()"
                    class="p-2 rounded-lg text-text-muted hover:text-text hover:bg-surface-muted transition-colors cursor-pointer"
                    aria-label="Ganti mode tema"
                >
                    <svg x-show="!dark" class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="dark" x-cloak class="h-5 w-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="mx-auto flex w-full max-w-7xl flex-1 items-start px-4 sm:px-6 lg:px-8">
        {{-- Backdrop for Mobile Sidebar --}}
        <div
            x-show="sidebarOpen"
            x-cloak
            @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-black/50 backdrop-blur-xs lg:hidden"
        ></div>

        {{-- Sidebar Navigation --}}
        <aside
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
            class="fixed inset-y-0 left-0 z-50 w-64 transform bg-surface border-r border-border transition-transform duration-200 ease-in-out lg:sticky lg:top-16 lg:z-auto lg:block lg:h-[calc(100vh-4rem)] lg:w-64 lg:shrink-0 lg:self-start lg:border-r lg:border-border lg:bg-transparent pt-16 lg:pt-8 pb-8 overflow-y-auto"
        >
            <div class="px-4 mb-4 lg:hidden flex items-center justify-between border-b border-border pb-3">
                <span class="font-bold text-text">Daftar Isi Docs</span>
                <button @click="sidebarOpen = false" class="p-1 rounded text-text-muted hover:text-text">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="space-y-6 px-3">
                {{-- Getting Started --}}
                <div>
                    <h3 class="px-3 text-xs font-semibold uppercase tracking-wider text-text-muted">Mulai</h3>
                    <div class="mt-2 space-y-1">
                        <x-docs.nav-link href="{{ route('docs.index') }}" :active="request()->routeIs('docs.index')">
                            Pengenalan
                        </x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.theming') }}" :active="request()->routeIs('docs.theming')">
                            Theming & Token
                        </x-docs.nav-link>
                    </div>
                </div>

                {{-- UI Components --}}
                <div>
                    <h3 class="px-3 text-xs font-semibold uppercase tracking-wider text-text-muted">Komponen UI</h3>
                    <div class="mt-2 space-y-1">
                        <x-docs.nav-link href="{{ route('docs.components.alert') }}" :active="request()->routeIs('docs.components.alert')">Alert</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.avatar') }}" :active="request()->routeIs('docs.components.avatar')">Avatar</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.badge') }}" :active="request()->routeIs('docs.components.badge')">Badge</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.button') }}" :active="request()->routeIs('docs.components.button')">Button</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.card') }}" :active="request()->routeIs('docs.components.card')">Card</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.dropdown') }}" :active="request()->routeIs('docs.components.dropdown')">Dropdown</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.empty-state') }}" :active="request()->routeIs('docs.components.empty-state')">Empty State</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.modal') }}" :active="request()->routeIs('docs.components.modal')">Modal</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.spinner') }}" :active="request()->routeIs('docs.components.spinner')">Spinner</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.table') }}" :active="request()->routeIs('docs.components.table')">Table</x-docs.nav-link>
                    </div>
                </div>

                {{-- Form Components --}}
                <div>
                    <h3 class="px-3 text-xs font-semibold uppercase tracking-wider text-text-muted">Komponen Form</h3>
                    <div class="mt-2 space-y-1">
                        <x-docs.nav-link href="{{ route('docs.components.checkbox') }}" :active="request()->routeIs('docs.components.checkbox')">Checkbox</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.input') }}" :active="request()->routeIs('docs.components.input')">Input</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.select') }}" :active="request()->routeIs('docs.components.select')">Select</x-docs.nav-link>
                        <x-docs.nav-link href="{{ route('docs.components.textarea') }}" :active="request()->routeIs('docs.components.textarea')">Textarea</x-docs.nav-link>
                    </div>
                </div>

                {{-- Charts --}}
                <div>
                    <h3 class="px-3 text-xs font-semibold uppercase tracking-wider text-text-muted">Grafik</h3>
                    <div class="mt-2 space-y-1">
                        <x-docs.nav-link href="{{ route('docs.charts') }}" :active="request()->routeIs('docs.charts')">Chart (Chart.js)</x-docs.nav-link>
                    </div>
                </div>
            </nav>
        </aside>

        {{-- Main Page Content --}}
        <main class="min-w-0 flex-1 py-8 lg:px-12">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
