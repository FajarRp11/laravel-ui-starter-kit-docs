<x-layout.docs title="Select">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Select"
        description="Komponen menu tarik-turun (dropdown select) untuk memilih satu opsi dari daftar pilihan yang telah ditentukan."
        section="Komponen Form"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="select.default" title="Contoh Dasar Select" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Select ketika terdapat 4 atau lebih pilihan opsi yang sudah pasti (seperti daftar provinsi, status pesanan, atau kategori akun).
            Jangan pakai Select jika pilihan hanya 2 atau 3 opsi sederhana (lebih ergonomis menggunakan Radio button atau Checkbox).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Varian tampilan berbasis konfigurasi opsi petunjuk (placeholder):</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default (Dengan Opsi Terpilih)</h3>
                <x-docs.example name="select.default" title="Select Standar" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Dengan Opsi Petunjuk (Placeholder)</h3>
                <x-docs.example name="select.placeholder" title="Select Berisi Placeholder" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Terkunci (Disabled)</h3>
                <x-docs.example name="select.states" title="State: Disabled" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Status Error Validasi</h3>
                <p class="text-sm text-text-muted mb-2">Border merah dan pesan error langsung muncul saat validasi gagal.</p>
                <x-docs.example name="select.error" title="State: Error Validasi" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $selectProps = [
                [
                    'prop' => 'label',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Label teks di atas elemen select.',
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
                    'description' => 'ID unik elemen HTML select. Otomatis dibuat jika null.',
                ],
                [
                    'prop' => 'value',
                    'type' => 'mixed',
                    'default' => 'null',
                    'description' => 'Nilai awal yang terpilih (mendukung old($name, $value)).',
                ],
                [
                    'prop' => 'placeholder',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Opsi petunjuk awal yang dinonaktifkan (disabled option).',
                ],
                [
                    'prop' => 'helper',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Teks panduan tambahan berwarna redup di bawah select.',
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
                    'description' => 'Menonaktifkan interaksi pemilihan opsi.',
                ],
                [
                    'prop' => 'required',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menandai kolom wajib dipilih dengan simbol bintang merah.',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$selectProps" />
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
                        <td class="px-4 py-3 text-sm text-text-muted">Daftar elemen &lt;option&gt; atau &lt;optgroup&gt; pilihan data.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Komponen tidak memiliki internal state, dan mendukung two-way binding via <code>x-model</code>:
        </p>
        @php
            $selectAlpineSample = <<<'BLADE'
<x-form.select name="role" x-model="selectedRole">
    <option value="editor">Editor</option>
    <option value="admin">Administrator</option>
</x-form.select>
BLADE;
        @endphp
        <x-docs.code language="blade" :code="$selectAlpineSample" />
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Elemen <code class="font-mono text-xs">&lt;select&gt;</code> terhubung dengan <code class="font-mono text-xs">&lt;label for="{id}"&gt;</code>.</li>
            <li>Ikon tanda panah chevron dilengkapi atribut <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
            <li>Saat validasi error, otomatis menambahkan <code class="font-mono text-xs">aria-invalid="true"</code> dan <code class="font-mono text-xs">aria-describedby="{id}-error"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Latar kotak seleksi menggunakan <code>bg-surface</code>, garis pinggir <code>border-border</code>, dan teks <code>text-text</code> yang otomatis tersinkronisasi pada tema gelap.
        </p>
    </section>
</x-layout.docs>
