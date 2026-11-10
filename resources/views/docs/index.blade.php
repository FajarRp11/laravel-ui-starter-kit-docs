<x-layout.docs title="Pengenalan">
    <x-docs.page-header
        title="Blade UI Kit"
        description="Dokumentasi resmi komponen antarmuka Laravel Blade dengan Alpine.js dan Tailwind CSS v4."
        section="Mulai"
    />

    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Tentang Kit</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Blade UI Kit dirancang untuk mempercepat pembuatan aplikasi web Laravel modern dengan performa tinggi.
            Semua komponen dibuat murni menggunakan Blade Component, Alpine.js untuk interaksi reaktif ringan, dan Tailwind CSS v4 untuk styling berbasis token warna OKLCH.
        </p>

        <x-docs.callout type="tip" title="Tanpa Build Server Eksternal">
            Kit dan dokumentasi ini dirancang agar dapat berjalan di lingkungan hosting sederhana (seperti InfinityFree) tanpa ketergantungan proses worker, queue server, atau database eksternal.
        </x-docs.callout>
    </section>

    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Struktur Komponen</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Komponen diorganisasi dalam namespace yang rapi:
        </p>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li><code class="font-mono text-xs text-primary-text">&lt;x-ui.*&gt;</code> : Komponen antarmuka dasar seperti button, badge, alert, modal, card, avatar, spinner, table.</li>
            <li><code class="font-mono text-xs text-primary-text">&lt;x-form.*&gt;</code> : Komponen formulir seperti input, select, textarea, checkbox.</li>
            <li><code class="font-mono text-xs text-primary-text">&lt;x-layout.*&gt;</code> : Komponen tata letak layout seperti sidebar, topbar, dan admin shell.</li>
        </ul>
    </section>

    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Contoh Cepat</h2>
        <p class="text-sm text-text-muted mb-3">Membuat tombol simpan dengan varian primary:</p>
        @php
            $quickSample = <<<'BLADE'
<x-ui.button variant="primary">
    Simpan Data
</x-ui.button>
BLADE;
        @endphp
        <x-docs.code language="blade" :code="$quickSample" />
    </section>
</x-layout.docs>
