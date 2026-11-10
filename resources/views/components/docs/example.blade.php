@props([
    'name',
    'title' => null,
    'align' => 'center',
    'collapsed' => false,
])

@php
    $parts = explode('.', $name);
    $viewPath = 'docs.examples.' . $name;
    $filePath = resource_path('views/docs/examples/' . implode('/', $parts) . '.blade.php');
    $code = file_exists($filePath) ? trim(file_get_contents($filePath)) : "// File contoh belum dibuat: resources/views/docs/examples/" . implode('/', $parts) . ".blade.php";

    $alignClasses = [
        'center' => 'items-center justify-center',
        'start' => 'items-start justify-start',
        'end' => 'items-end justify-end',
        'stretch' => 'items-stretch justify-stretch',
    ][$align] ?? 'items-center justify-center';
@endphp

<div
    x-data="{ showCode: {{ $collapsed ? 'false' : 'true' }} }"
    class="rounded-xl border border-border bg-surface overflow-hidden my-6 shadow-xs"
>
    {{-- Card Header / Toolbar --}}
    <div class="flex items-center justify-between px-4 py-2.5 border-b border-border bg-surface-muted/60 text-xs">
        <div class="flex items-center gap-2 font-mono text-text-muted">
            <span class="inline-block h-2 w-2 rounded-full bg-primary/70"></span>
            <span class="font-medium text-text">{{ $title ?? $name }}</span>
            <span class="text-[11px] text-text-muted hidden sm:inline">({{ $name }}.blade.php)</span>
        </div>

        <div class="flex items-center gap-2">
            <button
                type="button"
                @click="showCode = !showCode"
                class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-xs font-medium text-text-muted hover:text-text hover:bg-surface border border-transparent hover:border-border transition-colors cursor-pointer"
            >
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                <span x-text="showCode ? 'Sembunyikan Kode' : 'Lihat Kode'"></span>
            </button>
        </div>
    </div>

    {{-- Preview Canvas --}}
    <div class="p-6 sm:p-8 bg-surface text-text flex flex-wrap gap-4 {{ $alignClasses }} min-h-[120px] transition-colors">
        @if (view()->exists($viewPath))
            @include($viewPath)
        @else
            <div class="w-full py-6 text-center text-xs text-danger-text border border-dashed border-danger-border rounded-lg bg-danger-bg/40">
                View <code>{{ $viewPath }}</code> belum dibuat.
            </div>
        @endif
    </div>

    {{-- Code Block --}}
    <div x-show="showCode" x-collapse>
        <div class="border-t border-border">
            <x-docs.code :code="$code" language="blade" embedded />
        </div>
    </div>
</div>

