<x-layout.docs title="Checkbox">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Checkbox"
        description="Komponen input kotak centang dengan integrasi pesan kesalahan Laravel, teks panduan, dan status checked otomatis."
        section="Komponen Form"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="checkbox.default" title="Contoh Dasar Checkbox" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Checkbox untuk opsi boolean tunggal (seperti persetujuan syarat ketentuan atau fitur ingat saya) atau pemilihan banyak item dalam daftar filter.
            Jangan pakai Checkbox jika pengguna hanya boleh memilih tepat satu opsi dari beberapa pilihan mutlak (gunakan komponen Radio).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Varian tampilan berbasis konfigurasi teks panduan dan pesan validasi:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default</h3>
                <x-docs.example name="checkbox.default" title="Checkbox Biasa" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Dengan Teks Panduan (Helper)</h3>
                <x-docs.example name="checkbox.helper" title="Checkbox dengan Helper" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Checked & Disabled</h3>
                <x-docs.example name="checkbox.states" title="State Tercentang & Nonaktif" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Error Validasi</h3>
                <p class="text-sm text-text-muted mb-2">Border berubah menjadi merah dan memunculkan teks deskripsi kesalahan secara otomatis.</p>
                <x-docs.example name="checkbox.error" title="State Error Validasi" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $checkboxProps = [
                [
                    'prop' => 'label',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Label teks di samping kotak centang.',
                ],
                [
                    'prop' => 'name',
                    'type' => 'string',
                    'default' => "''",
                    'description' => 'Nama input formulir HTML dan kunci pencocokan validasi $errors.',
                ],
                [
                    'prop' => 'id',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'ID elemen HTML. Jika null, otomatis dibuat dari nama atau uniqid().',
                ],
                [
                    'prop' => 'value',
                    'type' => 'string',
                    'default' => "'1'",
                    'description' => 'Nilai yang dikirimkan ke server saat kondisi tercentang.',
                ],
                [
                    'prop' => 'checked',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Kondisi awal centang. Otomatis mempertahankan state old($name).',
                ],
                [
                    'prop' => 'disabled',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menonaktifkan interaksi klik dan meredupkan tampilan.',
                ],
                [
                    'prop' => 'helper',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks panduan tambahan berwarna redup di bawah label.',
                ],
                [
                    'prop' => 'error',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Pesan kesalahan khusus untuk menimpa $errors bawaan sesi Laravel.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$checkboxProps" />
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
                        <td class="px-4 py-3 text-sm text-text-muted">Konten label alternatif jika memerlukan elemen HTML khusus (misal tautan persetujuan).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Komponen tidak memiliki state Alpine internal, namun mendukung penuh two-way data binding via <code>x-model</code>:
        </p>
        @php
            $checkboxAlpineSample = <<<'BLADE'
<x-form.checkbox name="subscribe" x-model="isSubscribed" label="Terima Notifikasi Email" />
BLADE;
        @endphp
        <x-docs.code language="blade" :code="$checkboxAlpineSample" />
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Kotak input dikaitkan dengan tag <code class="font-mono text-xs">&lt;label for="{id}"&gt;</code> sehingga area teks dapat diklik untuk mencentang.</li>
            <li>Saat validasi gagal, secara otomatis menambahkan <code class="font-mono text-xs">aria-invalid="true"</code> dan <code class="font-mono text-xs">aria-describedby="{id}-error"</code>.</li>
            <li>Memiliki indikator ring fokus keyboard <code class="font-mono text-xs">focus:ring-2 focus:ring-ring</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Warna kotak input (<code>bg-surface</code>, <code>border-border</code>), teks label (<code>text-text</code>), dan warna aksen centang (<code>text-primary</code>) otomatis tersinkronisasi pada tema gelap.
        </p>
    </section>
</x-layout.docs>
