@props([
    'active' => false,
    'href' => '#',
])

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'flex items-center gap-2 px-3 py-1.5 text-sm rounded-md transition-colors ' . (
            $active
                ? 'bg-primary-light text-primary-text font-semibold'
                : 'text-text-muted hover:text-text hover:bg-surface-muted font-normal'
        )
    ]) }}
>
    {{ $slot }}
</a>

