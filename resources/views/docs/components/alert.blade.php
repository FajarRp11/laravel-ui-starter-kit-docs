<x-layout.docs title="Alert">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Alert"
        description="Komponen kotak pemberitahuan untuk menampilkan pesan status, informasi, peringatan, atau error penting."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="alert.default" title="Contoh Dasar" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Alert untuk memberikan umpan balik kontekstual setelah aksi pengguna (seperti sukses simpan atau gagal validasi) atau pengumuman sistem.
            Jangan pakai Alert untuk dialog interaktif berlapis yang memerlukan konfirmasi tombol ganda (gunakan komponen Modal untuk kebutuhan tersebut).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Info (Default)</h3>
                <x-docs.example name="alert.info" title="Variant: info" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Success</h3>
                <x-docs.example name="alert.success" title="Variant: success" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">3. Warning</h3>
                <x-docs.example name="alert.warning" title="Variant: warning" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">4. Danger</h3>
                <x-docs.example name="alert.danger" title="Variant: danger" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted mb-3">
            Komponen Alert mendukung mode dapat ditutup (<code>dismissible</code>). Ketika diaktifkan, tombol silang interaktif akan muncul di sisi kanan.
        </p>
        <x-docs.example name="alert.dismissible" title="State: Dismissible" />
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $alertProps = [
                [
                    'prop' => 'variant',
                    'type' => 'string',
                    'default' => "'info'",
                    'description' => "Jenis varian visual dan ikon: 'info', 'success', 'warning', 'danger'.",
                ],
                [
                    'prop' => 'title',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Judul tebal di bagian atas pesan alert.',
                ],
                [
                    'prop' => 'dismissible',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menampilkan tombol tutup untuk menyembunyikan alert dengan animasi Alpine.js.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$alertProps" />
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
                        <td class="px-4 py-3 text-sm text-text-muted">Konten tubuh pesan pemberitahuan (mendukung teks atau format HTML).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed mb-3">
            Ketika prop <code>dismissible</code> bernilai <code>true</code>, komponen menginisialisasi <code>x-data="{ show: true }"</code> secara otomatis dengan transisi <code>x-transition:leave</code> saat tombol tutup diklik.
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Memiliki atribut <code class="font-mono text-xs">role="alert"</code> pada kontainer utama agar langsung diumumkan oleh screen reader saat muncul.</li>
            <li>Ikon SVG memiliki atribut <code class="font-mono text-xs">aria-hidden="true"</code> untuk mencegah pembacaan duplikat oleh alat bantu aksesibilitas.</li>
            <li>Tombol penutup memiliki atribut <code class="font-mono text-xs">aria-label="Tutup pemberitahuan"</code> dan <code class="font-mono text-xs">tabindex="0"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Warna latar, border, dan teks alert menggunakan token semantik CSS (<code>--info-*</code>, <code>--success-*</code>, <code>--warning-*</code>, <code>--danger-*</code>). Nilai kontras warna otomatis beralih pada mode gelap.
        </p>
    </section>
</x-layout.docs>

