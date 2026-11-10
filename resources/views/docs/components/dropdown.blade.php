<x-layout.docs title="Dropdown">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Dropdown"
        description="Menu melayang kontekstual untuk menampilkan daftar tautan atau tindakan saat pemicu diklik."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="dropdown.default" title="Contoh Dasar" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Dropdown untuk menyembunyikan opsi tindakan sekunder seperti menu profil pengguna, opsi ekspor berkas, atau menu aksi pada baris tabel data.
            Jangan pakai Dropdown jika pilihan opsi hanya 2 atau 3 tombol sederhana yang sering diakses langsung (tampilkan tombol secara eksplisit).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian perataan (align) sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Rata Kiri (align="left" - Default)</h3>
                <x-docs.example name="dropdown.left" title="Variant: align=left" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Rata Kanan (align="right")</h3>
                <x-docs.example name="dropdown.right" title="Variant: align=right" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted mb-3">
            Tersedia pilihan lebar popover via prop <code>width</code>: <code>48</code> (default), <code>56</code>, atau <code>64</code>.
        </p>
        <x-docs.example name="dropdown.widths" title="Ukuran Lebar Popover" />
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $dropdownProps = [
                [
                    'prop' => 'align',
                    'type' => 'string',
                    'default' => "'left'",
                    'description' => "Posisi bukaan menu popover: 'left' atau 'right'.",
                ],
                [
                    'prop' => 'width',
                    'type' => 'string',
                    'default' => "'48'",
                    'description' => "Lebar panel menu popover: '48' (w-48), '56' (w-56), '64' (w-64).",
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$dropdownProps" />
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
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">trigger</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Elemen pemicu (tombol atau avatar) yang diklik untuk membuka/menutup menu.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">default ($slot)</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Daftar item tautan atau tombol tindakan di dalam menu popover.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed mb-3">
            Komponen mengelola state keterlihatan menggunakan Alpine <code>x-data="{ open: false }"</code>.
            Otomatis menangani penutupan saat pengguna mengklik di luar area (<code>@click.outside="open = false"</code>) serta saat tombol keyboard Escape ditekan (<code>@keydown.escape.stop="open = false"</code>).
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Panel menu memiliki atribut <code class="font-mono text-xs">role="menu"</code> dan <code class="font-mono text-xs">aria-orientation="vertical"</code>.</li>
            <li>Menutup menu secara instan saat tombol <kbd class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">Escape</kbd> ditekan.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Panel menu menggunakan token <code>bg-surface</code> dan <code>border-border</code>. Kontras teks dan bayangan otomatis tersinkronisasi saat mode gelap aktif.
        </p>
    </section>
</x-layout.docs>

