<x-layout.docs title="Button">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Button"
        description="Komponen tombol serbaguna untuk memicu aksi, pengiriman formulir, atau navigasi tautan."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="button.default" title="Contoh Dasar" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Button untuk memicu aksi langsung seperti submit form, membuka modal dialog, atau eksekusi fungsi Alpine.js.
            Pakai variant link (isi prop <code>href</code>) jika tombol berpindah ke halaman lain.
            Jangan pakai Button untuk teks tautan inline di dalam paragraf artikel biasa.
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Primary (Default)</h3>
                <x-docs.example name="button.primary" title="Variant: primary" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Secondary</h3>
                <x-docs.example name="button.secondary" title="Variant: secondary" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">3. Outline</h3>
                <x-docs.example name="button.outline" title="Variant: outline" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">4. Ghost</h3>
                <x-docs.example name="button.ghost" title="Variant: ghost" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">5. Danger</h3>
                <x-docs.example name="button.danger" title="Variant: danger" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Ukuran (Sizes)</h3>
                <p class="text-sm text-text-muted mb-2">Tersedia opsi <code>sm</code>, <code>md</code> (default), <code>lg</code>, dan <code>icon</code>.</p>
                <x-docs.example name="button.sizes" title="Ukuran Tombol" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Kondisi (States)</h3>
                <p class="text-sm text-text-muted mb-2">Mendukung state <code>disabled</code>, <code>loading</code>, <code>pill</code>, dan <code>href</code>.</p>
                <x-docs.example name="button.states" title="State Tombol" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $props = [
                [
                    'prop' => 'variant',
                    'type' => 'string',
                    'default' => "'primary'",
                    'description' => "Gaya visual tombol: 'primary', 'secondary', 'outline', 'ghost', 'danger'.",
                ],
                [
                    'prop' => 'size',
                    'type' => 'string',
                    'default' => "'md'",
                    'description' => "Ukuran tombol: 'sm', 'md', 'lg', 'icon'.",
                ],
                [
                    'prop' => 'type',
                    'type' => 'string',
                    'default' => "'button'",
                    'description' => "Atribut HTML type tombol: 'button', 'submit', 'reset'.",
                ],
                [
                    'prop' => 'href',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Target URL. Jika diisi, komponen merender tag <a> bukan <button>.',
                ],
                [
                    'prop' => 'disabled',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menonaktifkan klik dan meredupkan tampilan visual.',
                ],
                [
                    'prop' => 'loading',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menampilkan animasi spinner di samping teks dan mengunci tombol.',
                ],
                [
                    'prop' => 'pill',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Mengubah radius sudut menjadi bulat penuh (rounded-full).',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$props" />
    </section>

    {{-- 7. Slots --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Slots</h2>
        <div class="overflow-x-auto rounded-lg border border-border bg-surface">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-border bg-surface-muted/70 text-xs font-semibold uppercase tracking-wider text-text-muted">
                    <tr>
                        <th class="px-4 py-3">Slot</th>
                        <th class="px-4 py-3">Fungsi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">default ($slot)</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Konten label teks, ikon SVG, atau elemen di dalam tombol.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed mb-3">
            Komponen tidak memiliki state Alpine internal, namun meneruskan semua atribut direktif Alpine ke elemen tombol asli.
            Dapat dipakai langsung untuk mengontrol state komponen lain (misal modal dialog):
        </p>
        @php
            $alpineSnippet = <<<'BLADE'
<x-ui.button @click="$dispatch('open-modal', 'hapus-transaksi')">
    Buka Konfirmasi Hapus
</x-ui.button>
BLADE;
        @endphp
        <x-docs.code language="blade" :code="$alpineSnippet" />
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Menyertakan atribut <code class="font-mono text-xs">tabindex="0"</code> sehingga selalu dapat dijangkau via navigasi keyboard (Tab).</li>
            <li>Memiliki styling fokus visual yang jelas dengan ring offset (<code class="font-mono text-xs">focus:ring-2 focus:ring-ring</code>).</li>
            <li>Spinner pemuatan otomatis memiliki atribut <code class="font-mono text-xs">aria-hidden="true"</code> agar tidak dibaca ganda oleh screen reader.</li>
            <li>Untuk tombol ikon (<code class="font-mono text-xs">size="icon"</code>), pengembang wajib menambahkan atribut <code class="font-mono text-xs">aria-label</code> deskriptif.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Semua varian memakai token CSS global (<code>--primary</code>, <code>--surface</code>, <code>--border</code>, <code>--danger-*</code>).
            Tampilan tombol otomatis beralih warna secara konsisten saat kelas <code>.dark</code> aktif pada dokumen.
        </p>
    </section>
</x-layout.docs>
