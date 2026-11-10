<x-layout.docs title="Card">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Card"
        description="Kontainer berbingkai untuk mengelompokkan informasi dan tindakan terkait dalam satu kesatuan visual."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="card.default" title="Contoh Dasar" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Card untuk membungkus ringkasan metrik dasbor, formulir input, item daftar produk, atau kartu ringkasan transaksi.
            Jangan pakai Card untuk membungkus setiap baris elemen kecil tunggal seperti item list sederhana (buat halaman terasa berantakan dan berat).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian struktur slot pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default Card</h3>
                <x-docs.example name="card.default" title="Card Sederhana" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Card Lengkap (Header, Body, Footer)</h3>
                <x-docs.example name="card.slots" title="Card dengan Header & Footer" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted mb-3">
            Opsi tanpa padding internal (<code>:padding="false"</code>) berguna ketika isi kartu berupa tabel data atau daftar bergaris yang membentang penuh ke tepi.
        </p>
        <x-docs.example name="card.no-padding" title="State: Tanpa Padding (:padding=false)" />
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $cardProps = [
                [
                    'prop' => 'padding',
                    'type' => 'bool',
                    'default' => 'true',
                    'description' => 'Menerapkan padding px-6 py-5 pada badan utama kartu.',
                ],
                [
                    'prop' => 'shadow',
                    'type' => 'bool',
                    'default' => 'true',
                    'description' => 'Menerapkan efek bayangan lembut shadow-sm pada kontainer.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$cardProps" />
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
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">header</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Area tajuk atas dengan garis pembatas (border-b).</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">default ($slot)</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Konten tubuh kartu utama.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">footer</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Area kaki kartu dengan latar kontras ringan (bg-surface-muted/50) untuk tombol tindakan.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Komponen ini statis tanpa dependensi state Alpine internal.
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Menghasilkan kontainer semantik standar yang meneruskan seluruh atribut HTML seperti <code class="font-mono text-xs">aria-labelledby</code> atau <code class="font-mono text-xs">role="region"</code> jika diperlukan.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Latar kartu (<code>--surface</code>), footer (<code>--surface-muted</code>), dan border (<code>--border</code>) otomatis berubah ke skema gelap dengan kontras optimal.
        </p>
    </section>
</x-layout.docs>

