<x-layout.docs title="Table">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Table"
        description="Komponen penyajian data tabular yang responsif dengan dukungan baris tajuk, footer, efek hover, dan pola belang (striped)."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="table.default" title="Contoh Dasar Tabel" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Table untuk menampilkan sekumpulan rekaman data terstruktur dengan kolom metrik yang seragam seperti riwayat transaksi, log inventaris, atau daftar pengguna.
            Jangan pakai Table untuk menyusun tata letak halaman (layout grid) atau data hierarki bercabang yang lebih tepat disajikan dalam bentuk daftar pohon (tree view).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian gaya tabel sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default (Polos dengan Hover)</h3>
                <x-docs.example name="table.default" title="Tabel Standar" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Striped (Belang Selang-seling)</h3>
                <x-docs.example name="table.striped" title="Tabel Striped dengan Footer" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Secara default, kontainer pembungkus tabel dilengkapi dengan class <code>overflow-x-auto</code> sehingga aman dan dapat digeser menyamping pada layar smartphone kecil tanpa merusak layout luar.
        </p>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $tableProps = [
                [
                    'prop' => 'striped',
                    'type' => 'bool',
                    'default' => 'false',
                    'description' => 'Menerapkan warna latar selang-seling pada baris genap ([&>tr:nth-child(even)]:bg-surface-muted/50).',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$tableProps" />
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
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">head</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Elemen &lt;tr&gt;&lt;th&gt;...&lt;/th&gt;&lt;/tr&gt; untuk tajuk thead tabel.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">default ($slot)</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Baris &lt;tr&gt;&lt;td&gt;...&lt;/td&gt;&lt;/tr&gt; badan utama tbody tabel.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">foot</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Baris tfoot untuk ringkasan jumlah atau akumulasi total nilai data.</td>
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
            <li>Menyusun elemen HTML semantik baku: <code class="font-mono text-xs">&lt;table&gt;</code>, <code class="font-mono text-xs">&lt;thead&gt;</code>, <code class="font-mono text-xs">&lt;tbody&gt;</code>, dan <code class="font-mono text-xs">&lt;tfoot&gt;</code>.</li>
            <li>Gunakan atribut <code class="font-mono text-xs">scope="col"</code> pada setiap sel tajuk <code class="font-mono text-xs">&lt;th&gt;</code> untuk kemudahan navigasi screen reader.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Garis pembatas tabel (<code>divide-border</code>), latar belang (<code>bg-surface-muted/50</code>), dan efek sorot kursor (<code>hover:bg-surface-muted/60</code>) otomatis terkalibrasi dengan mode gelap.
        </p>
    </section>
</x-layout.docs>

