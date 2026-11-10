@props([
    'code' => null,
    'language' => null,
    'lang' => null,
    'embedded' => false,
])

@php
    $resolvedLanguage = $lang ?? $language ?? 'blade';
    $content = $code ?? (string) $slot;
    $content = trim($content);

    $wrapperClasses = $embedded
        ? 'relative group bg-surface-muted/60 overflow-hidden'
        : 'relative group rounded-lg bg-surface-muted border border-border overflow-hidden my-4';
@endphp

<div
    x-data="{
        copied: false,
        copy() {
            navigator.clipboard.writeText($refs.codeContent.innerText.trim());
            this.copied = true;
            setTimeout(() => this.copied = false, 2000);
        }
    }"
    {{ $attributes->merge(['class' => $wrapperClasses]) }}
>
    <div class="flex items-center justify-between px-4 py-2 border-b border-border bg-surface/50 text-xs text-text-muted font-mono">
        <span class="uppercase tracking-wider font-semibold text-[11px]">{{ $resolvedLanguage }}</span>
        <button
            type="button"
            @click="copy()"
            class="inline-flex items-center gap-1.5 px-2 py-1 rounded text-xs text-text-muted hover:text-text hover:bg-surface border border-transparent hover:border-border transition-colors duration-150 cursor-pointer"
            aria-label="Salin kode"
        >
            <svg x-show="!copied" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <svg x-show="copied" x-cloak class="h-3.5 w-3.5 text-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span x-text="copied ? 'Tersalin!' : 'Salin'">Salin</span>
        </button>
    </div>

    <pre class="p-4 text-xs sm:text-sm font-mono text-text overflow-x-auto leading-relaxed selection:bg-primary/20"><code x-ref="codeContent">{{ $content }}</code></pre>
</div>
