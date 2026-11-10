<x-layout.docs title="Theming & Desain Token">
    <x-docs.page-header
        title="Theming & Token"
        description="Sistem token warna berbasis ruang warna OKLCH dan integrasi Dark Mode otomatis."
        section="Mulai"
    />

    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sistem Desain Token</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Blade UI Kit mendefinisikan seluruh palet warna dalam format CSS Variables di root dokumen menggunakan ruang warna <code>oklch(...)</code>. Hal ini memberikan gradasi kecerahan yang akurat antara mode terang dan gelap.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="h-10 w-full rounded bg-primary mb-2"></div>
                <div class="text-xs font-semibold text-text">--primary</div>
                <div class="text-[11px] text-text-muted font-mono">Warna aksen utama</div>
            </div>
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="h-10 w-full rounded bg-surface border border-border mb-2"></div>
                <div class="text-xs font-semibold text-text">--surface</div>
                <div class="text-[11px] text-text-muted font-mono">Warna kartu & modal</div>
            </div>
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="h-10 w-full rounded bg-surface-muted mb-2"></div>
                <div class="text-xs font-semibold text-text">--surface-muted</div>
                <div class="text-[11px] text-text-muted font-mono">Warna latar kontras ringan</div>
            </div>
        </div>
    </section>

    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark Mode</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Pengaturan mode gelap dikontrol dengan menambahkan kelas <code>.dark</code> pada elemen <code>&lt;html&gt;</code>. Alpine.js secara otomatis menyimpan preferensi pengguna di <code>localStorage</code> dan menyinkronkan dengan preferensi sistem operasi via <code>prefers-color-scheme</code>.
        </p>

        <x-docs.code language="javascript" code="// Contoh toggle dark mode dengan Alpine.js
dark = !dark;
localStorage.setItem('theme', dark ? 'dark' : 'light');
document.documentElement.classList.toggle('dark', dark);" />
    </section>
</x-layout.docs>

