@props([
    'title',
    'description' => null,
    'badge' => null,
    'section' => null,
])

<header class="mb-8 pb-6 border-b border-border">
    @if ($section)
        <p class="text-xs font-semibold uppercase tracking-wider text-primary-text mb-2">{{ $section }}</p>
    @endif

    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-3xl sm:text-4xl font-bold text-text tracking-tight">{{ $title }}</h1>
            @if ($description)
                <p class="mt-2 text-base sm:text-lg text-text-muted leading-relaxed max-w-3xl">{{ $description }}</p>
            @endif
        </div>

        <div class="flex items-center gap-2 self-start sm:self-center">
            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-mono font-medium bg-surface-muted text-text-muted border border-border">
                <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                <span>kit: {{ config('docs.kit_hash', 'unknown') }}</span>
            </span>
            @if ($badge)
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-light text-primary-text border border-primary/20">
                    {{ $badge }}
                </span>
            @endif
        </div>
    </div>
</header>

