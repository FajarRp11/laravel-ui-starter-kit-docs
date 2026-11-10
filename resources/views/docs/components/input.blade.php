<x-layout.docs title="Input">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Input"
        description="Komponen bidang masukan teks formulir dengan dukungan label, penanda wajib isi, slot ikon prefix/suffix, dan integrasi error Laravel."
        section="Komponen Form"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="input.default" title="Contoh Dasar Input" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Input untuk mengumpulkan data teks singkat seperti nama, email, kata sandi, URL, atau angka nominal uang.
            Jangan pakai Input untuk teks multibaris yang panjang seperti deskripsi artikel atau catatan keluhan (gunakan komponen Textarea).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian tata letak slot dekorator (prefix dan suffix):</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default (Tanpa Slot Ikon)</h3>
                <x-docs.example name="input.default" title="Input Standar" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Dengan Prefix & Suffix</h3>
                <x-docs.example name="input.prefix-suffix" title="Input Berisi Prefix & Suffix" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Terkunci (Disabled)</h3>
                <x-docs.example name="input.states" title="State: Disabled" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Gagal Validasi (Error)</h3>
                <p class="text-sm text-text-muted mb-2">Border dan ring berubah menjadi warna bahaya, disertai pesan kesalahan di bawah input.</p>
                <x-docs.example name="input.error" title="State: Error Validasi" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $inputProps = [
                [
                    'prop' => 'label',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks label di atas kolom input.',
                ],
                [
                    'prop' => 'name',
                    'type' => 'string',
                    'default' => "''",
                    'description' => 'Nama atribut input formulir HTML dan kunci session old().',
                ],
                [
                    'prop' => 'id',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'ID unik elemen HTML input. Jika kosong, dibuat otomatis.',
                ],
                [
                    'prop' => 'type',
                    'type' => 'string',
                    'default' => "'text'",
                    'description' => "Jenis input HTML: 'text', 'email', 'password', 'number', 'tel', dll.",
                ],
                [
                    'prop' => 'value',
                    'type' => 'mixed',
                    'default' => 'null',
                    'description' => 'Nilai awal kolom. Otomatis mempertahankan isian sesi old($name, $value).',
                ],
                [
                    'prop' => 'placeholder',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks petunjuk yang muncul saat kolom masih kosong.',
                ],
                [
                    'prop' => 'helper',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks panduan tambahan berwarna redup di bawah kolom input.',
                ],
                [
                    'prop' => 'error',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Pesan kesalahan untuk menimpa $errors bawaan validasi Laravel.',
                ],
                [
                    'prop' => 'disabled',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menonaktifkan pengetikan dan meredupkan tampilan visual.',
                ],
                [
                    'prop' => 'required',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menandai kolom wajib diisi dengan simbol bintang merah.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$inputProps" />
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
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">prefix</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Elemen dekoratif di sisi kiri dalam kolom (misal ikon atau simbol mata uang Rp).</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">suffix</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Elemen dekoratif di sisi kanan dalam kolom (misal ikon pencarian atau tombol lihat sandi).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Komponen tidak memiliki internal state, dan mendukung two-way binding langsung via <code>x-model</code> atau event listener Alpine:
        </p>
        @php
            $inputAlpineSample = <<<'BLADE'
<x-form.input name="keyword" x-model.debounce.300ms="search" placeholder="Cari data..." />
BLADE;
        @endphp
        <x-docs.code language="blade" :code="$inputAlpineSample" />
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Label terhubung langsung dengan input melalui atribut <code class="font-mono text-xs">&lt;label for="{id}"&gt;</code>.</li>
            <li>Simbol bintang tanda wajib diisi ditandai dengan <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
            <li>Saat validasi gagal, otomatis menyertakan <code class="font-mono text-xs">aria-invalid="true"</code> dan <code class="font-mono text-xs">aria-describedby="{id}-error"</code>.</li>
            <li>Memiliki indikator fokus cincin yang jelas (<code class="font-mono text-xs">focus:ring-2 focus:ring-ring</code>).</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Warna latar kolom (<code>bg-surface</code>), garis pinggir (<code>border-border</code>), teks input (<code>text-text</code>), dan placeholder (<code>placeholder:text-text-muted</code>) otomatis tersinkronisasi pada mode gelap.
        </p>
    </section>
</x-layout.docs>
