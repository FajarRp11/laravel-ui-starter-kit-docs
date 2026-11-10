<x-layout.docs title="Modal">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Modal"
        description="Jendela dialog overlay interaktif yang fokus pada tugas atau konfirmasi tertentu sebelum kembali ke halaman utama."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="modal.default" title="Contoh Dasar Modal" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Modal untuk konfirmasi tindakan destruktif (seperti hapus data), formulir input cepat tanpa pindah halaman, atau menampilkan rincian berkas.
            Jangan pakai Modal untuk menampilkan konten artikel yang sangat panjang atau alur multi-halaman yang rumit (lebih baik gunakan halaman rute mandiri).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian ukuran (size) sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Default (size="md" - max-w-lg)</h3>
                <x-docs.example name="modal.default" title="Modal Standar (md)" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Ukuran Lainnya (sm, lg, xl)</h3>
                <x-docs.example name="modal.sizes" title="Varian Ukuran Modal" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted mb-3">
            Modal dapat menampung formulir entri data dengan tombol footer untuk validasi dan penutupan dialog.
        </p>
        <x-docs.example name="modal.form" title="State: Modal dengan Form" />
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $modalProps = [
                [
                    'prop' => 'id',
                    'type' => 'string',
                    'default' => 'required',
                    'description' => 'ID unik untuk binding atribut aksesibilitas aria-labelledby.',
                ],
                [
                    'prop' => 'title',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Judul teks pada bilah tajuk modal.',
                ],
                [
                    'prop' => 'size',
                    'type' => 'string',
                    'default' => "'md'",
                    'description' => "Ukuran lebar maksimal modal: 'sm' (max-w-sm), 'md' (max-w-lg), 'lg' (max-w-2xl), 'xl' (max-w-4xl).",
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$modalProps" />
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
                        <td class="px-4 py-3 text-sm text-text-muted">Elemen pemicu (tombol) yang otomatis mengubah open = true saat diklik.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">default ($slot)</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Isi badan utama modal dialog.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">footer</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Bilah bawah dengan latar kontras untuk tombol aksi (Batal, Simpan, Hapus).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed mb-3">
            Modal mengelola state keterbukaan via <code>x-data="{ open: false }"</code>.
            Secara otomatis mengunci scroll dokumen saat terbuka dengan <code>$watch('open', value => document.body.classList.toggle('overflow-hidden', value))</code>.
            Dapat ditutup dari dalam slot via <code>@click="open = false"</code>.
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Menyertakan atribut <code class="font-mono text-xs">role="dialog"</code> dan <code class="font-mono text-xs">aria-modal="true"</code>.</li>
            <li>Mengaitkan judul dengan <code class="font-mono text-xs">aria-labelledby="{id}-title"</code>.</li>
            <li>Otomatis menutup saat tombol keyboard <kbd class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">Escape</kbd> ditekan.</li>
            <li>Backdrop semi-transparan memiliki <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Kotak dialog memakai latar <code>bg-surface</code>, border <code>border-border</code>, dan footer <code>bg-surface-muted/50</code> yang otomatis beradaptasi dengan mode gelap.
        </p>
    </section>
</x-layout.docs>

