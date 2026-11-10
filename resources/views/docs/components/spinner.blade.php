<x-layout.docs title="Spinner">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Spinner"
        description="Indikator pemuatan berputar untuk menandai operasi asinkron atau proses data yang sedang berjalan."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="spinner.default" title="Contoh Dasar Spinner" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Spinner saat menunggu respons server, proses unggah berkas, atau pengiriman formulir.
            Jangan pakai Spinner untuk proses berdurasi panjang dengan persentase progres yang jelas (lebih cocok menggunakan komponen progress bar).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian warna (color) sesuai definisi pada source kit:</p>

        <x-docs.example name="spinner.colors" title="Varian Warna Spinner" />
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted mb-3">
            Tersedia pilihan ukuran dimensi <code>xs</code>, <code>sm</code>, <code>md</code> (default), <code>lg</code>, dan <code>xl</code>.
        </p>
        <x-docs.example name="spinner.sizes" title="Ukuran Spinner" />
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $spinnerProps = [
                [
                    'prop' => 'size',
                    'type' => 'string',
                    'default' => "'md'",
                    'description' => "Ukuran dimensi spinner: 'xs' (h-3), 'sm' (h-4), 'md' (h-5), 'lg' (h-8), 'xl' (h-12).",
                ],
                [
                    'prop' => 'color',
                    'type' => 'string',
                    'default' => "'primary'",
                    'description' => "Warna garis spinner: 'primary', 'white', 'current', 'neutral'.",
                ],
                [
                    'prop' => 'label',
                    'type' => 'string',
                    'default' => "'Memuat...'",
                    'description' => 'Label deskriptif untuk aksesibilitas pembaca layar (screen reader).',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$spinnerProps" />
    </section>

    {{-- 7. Slots --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Slots</h2>
        <p class="text-sm text-text-muted">Komponen ini tidak memiliki slot (isi dikontrol penuh via props).</p>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Komponen statis tanpa internal state. Dapat dikombinasikan dengan direktif Alpine <code>x-show="loading"</code> pada antarmuka dinamis.
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Memiliki atribut <code class="font-mono text-xs">role="status"</code> dan <code class="font-mono text-xs">aria-label</code>.</li>
            <li>Menyertakan teks ramah screen reader melalui elemen tersembunyi <code class="font-mono text-xs">&lt;span class="sr-only"&gt;</code>.</li>
            <li>Elemen SVG menyertakan <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Warna <code>primary</code> dan <code>neutral</code> tersinkronisasi otomatis dengan palet CSS tokens mode gelap.
        </p>
    </section>
</x-layout.docs>

