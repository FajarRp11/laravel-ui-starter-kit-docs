<x-layout.docs title="Badge">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Badge"
        description="Komponen label kecil untuk menunjukkan status entitas, kategori, tag, atau jumlah notifikasi."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="badge.default" title="Contoh Dasar" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Badge untuk menyorot status rekaman data (seperti status transaksi lunas, tertunda, atau draf) dan tag kategori.
            Jangan pakai Badge sebagai elemen klik navigasi utama (gunakan Button atau Link teks).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Primary (Default)</h3>
                <x-docs.example name="badge.primary" title="Variant: primary" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Success</h3>
                <x-docs.example name="badge.success" title="Variant: success" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">3. Warning</h3>
                <x-docs.example name="badge.warning" title="Variant: warning" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">4. Danger</h3>
                <x-docs.example name="badge.danger" title="Variant: danger" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">5. Info</h3>
                <x-docs.example name="badge.info" title="Variant: info" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">6. Neutral</h3>
                <x-docs.example name="badge.neutral" title="Variant: neutral" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Ukuran (Sizes)</h3>
                <p class="text-sm text-text-muted mb-2">Tersedia opsi <code>sm</code>, <code>md</code> (default), dan <code>lg</code>.</p>
                <x-docs.example name="badge.sizes" title="Ukuran Badge" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Kondisi & Indikator (States)</h3>
                <p class="text-sm text-text-muted mb-2">Mendukung indikator status <code>dot</code>, bentuk non-pill (<code>:pill="false"</code>), dan mode <code>dismissible</code>.</p>
                <x-docs.example name="badge.states" title="State & Opsi Tambahan" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $badgeProps = [
                [
                    'prop' => 'variant',
                    'type' => 'string',
                    'default' => "'primary'",
                    'description' => "Warna tema badge: 'primary', 'success', 'warning', 'danger', 'info', 'neutral'.",
                ],
                [
                    'prop' => 'size',
                    'type' => 'string',
                    'default' => "'md'",
                    'description' => "Ukuran padding dan teks: 'sm', 'md', 'lg'.",
                ],
                [
                    'prop' => 'pill',
                    'type' => 'bool',
                    'default' => 'true',
                    'description' => 'Bentuk membulat penuh (rounded-full). Jika false, menggunakan rounded biasa.',
                ],
                [
                    'prop' => 'dot',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menampilkan lingkaran indikator titik warna di sebelah kiri teks.',
                ],
                [
                    'prop' => 'dismissible',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menampilkan tombol silang untuk menghapus badge dari tampilan menggunakan Alpine.js.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$badgeProps" />
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
                        <td class="px-4 py-3 text-sm text-text-muted">Teks label atau nilai angka notifikasi badge.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Ketika prop <code>dismissible</code> bernilai <code>true</code>, komponen menginisialisasi <code>x-data="{ show: true }"</code> secara otomatis dengan transisi keluar <code>x-transition:leave</code> saat tombol silang diklik.
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Titik status indikator (<code class="font-mono text-xs">dot</code>) memiliki atribut <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
            <li>Tombol dismiss memiliki atribut <code class="font-mono text-xs">aria-label="Hapus badge"</code> dan <code class="font-mono text-xs">tabindex="0"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Setiap varian warna memanfaatkan CSS token sistem (<code>--success-bg</code>, <code>--success-text</code>, dll) yang secara otomatis beradaptasi saat dokumen beralih ke mode gelap.
        </p>
    </section>
</x-layout.docs>

