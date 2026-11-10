<x-layout.docs title="Textarea">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Textarea"
        description="Komponen masukan teks multibaris untuk paragraf panjang, catatan tambahan, atau formulir umpan balik."
        section="Komponen Form"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="textarea.default" title="Contoh Dasar Textarea" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Textarea untuk masukan teks deskriptif yang membutuhkan banyak kalimat seperti ulasan produk, alamat pengiriman lengkap, atau pesan dukungan tiket.
            Jangan pakai Textarea untuk nilai teks sebaris seperti alamat email atau nomor telepon (gunakan komponen Input).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Varian tampilan berbasis variasi tinggi baris baris (rows):</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default (rows=4)</h3>
                <x-docs.example name="textarea.default" title="Textarea Standar 4 Baris" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Variasi Baris Kustom (rows=2 & rows=6)</h3>
                <x-docs.example name="textarea.rows" title="Textarea dengan Jumlah Baris Berbeda" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Terkunci (Disabled)</h3>
                <x-docs.example name="textarea.states" title="State: Disabled" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Error Validasi</h3>
                <p class="text-sm text-text-muted mb-2">Border merah dengan pesan deskripsi kesalahan di bawah kolom.</p>
                <x-docs.example name="textarea.error" title="State: Error Validasi" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $textareaProps = [
                [
                    'prop' => 'label',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Label teks di atas elemen textarea.',
                ],
                [
                    'prop' => 'name',
                    'type' => 'string',
                    'default' => "''",
                    'description' => 'Nama atribut formulir HTML dan kunci pencocokan validasi $errors serta old().',
                ],
                [
                    'prop' => 'id',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'ID unik elemen HTML textarea. Otomatis dibuat jika null.',
                ],
                [
                    'prop' => 'value',
                    'type' => 'mixed',
                    'default' => 'null',
                    'description' => 'Nilai teks awal (mendukung old($name, $value)).',
                ],
                [
                    'prop' => 'rows',
                    'type' => 'int',
                    'default' => '4',
                    'description' => 'Jumlah tinggi baris tampak teks.',
                ],
                [
                    'prop' => 'placeholder',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks petunjuk saat kolom masih kosong.',
                ],
                [
                    'prop' => 'helper',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks panduan tambahan berwarna redup di bawah textarea.',
                ],
                [
                    'prop' => 'error',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Pesan kesalahan khusus untuk menimpa $errors bawaan sesi Laravel.',
                ],
                [
                    'prop' => 'disabled',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menonaktifkan pengetikan teks.',
                ],
                [
                    'prop' => 'required',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menandai kolom wajib diisi dengan simbol bintang merah.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$textareaProps" />
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
                        <td class="px-4 py-3 text-sm text-text-muted">Konten isi teks alternatif jika prop value tidak diisi.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Komponen tidak memiliki internal state, dan mendukung binding <code>x-model</code>:
        </p>
        @php
            $textareaAlpineSample = <<<'BLADE'
<x-form.textarea name="feedback" x-model="feedbackText" placeholder="Ketik saran Anda..." />
BLADE;
        @endphp
        <x-docs.code language="blade" :code="$textareaAlpineSample" />
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Elemen <code class="font-mono text-xs">&lt;textarea&gt;</code> terhubung dengan <code class="font-mono text-xs">&lt;label for="{id}"&gt;</code>.</li>
            <li>Saat validasi error, otomatis menambahkan atribut <code class="font-mono text-xs">aria-invalid="true"</code> dan <code class="font-mono text-xs">aria-describedby="{id}-error"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Warna latar kolom (<code>bg-surface</code>), garis pinggir (<code>border-border</code>), teks input (<code>text-text</code>), dan placeholder (<code>placeholder:text-text-muted</code>) otomatis tersinkronisasi pada tema gelap.
        </p>
    </section>
</x-layout.docs>
