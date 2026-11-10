@props([
    'type' => 'info',
    'title' => null,
])

@php
    $styles = [
        'info' => [
            'box' => 'bg-info-bg border-info-border text-info-text',
            'title' => 'text-info-text font-semibold',
            'body' => 'text-text',
            'defaultTitle' => 'Informasi',
        ],
        'warning' => [
            'box' => 'bg-warning-bg border-warning-border text-warning-text',
            'title' => 'text-warning-text font-semibold',
            'body' => 'text-text',
            'defaultTitle' => 'Peringatan',
        ],
        'tip' => [
            'box' => 'bg-success-bg border-success-border text-success-text',
            'title' => 'text-success-text font-semibold',
            'body' => 'text-text',
            'defaultTitle' => 'Tips',
        ],
        'danger' => [
            'box' => 'bg-danger-bg border-danger-border text-danger-text',
            'title' => 'text-danger-text font-semibold',
            'body' => 'text-text',
            'defaultTitle' => 'Perhatian',
        ],
    ][$type] ?? [
        'box' => 'bg-surface-muted border-border text-text',
        'title' => 'text-text font-semibold',
        'body' => 'text-text-muted',
        'defaultTitle' => 'Catatan',
    ];
@endphp

<div class="my-6 flex gap-3 rounded-lg border p-4 text-sm {{ $styles['box'] }}">
    <div class="shrink-0 mt-0.5">
        @if ($type === 'warning')
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        @elseif ($type === 'tip')
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
        @elseif ($type === 'danger')
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        @else
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        @endif
    </div>

    <div class="flex-1">
        <h4 class="text-sm font-semibold mb-1 {{ $styles['title'] }}">{{ $title ?? $styles['defaultTitle'] }}</h4>
        <div class="text-xs sm:text-sm leading-relaxed {{ $styles['body'] }}">
            {{ $slot }}
        </div>
    </div>
</div>

