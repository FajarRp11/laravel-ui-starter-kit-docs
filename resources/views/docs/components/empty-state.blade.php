<x-layout.docs title="Empty State">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Empty State"
        description="Komponen ilustratif untuk menyajikan tampilan informatif saat belum ada data, pencarian nihil, atau kotak masuk kosong."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="empty-state.default" title="Contoh Dasar" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Empty State ketika tabel data, daftar notifikasi, atau hasil pencarian tidak memiliki catatan rekaman untuk ditampilkan.
            Sediakan tombol tindakan utama (call-to-action) agar pengguna tahu langkah yang perlu diambil selanjutnya.
            Jangan biarkan area konten kosong begitu saja tanpa penjelasan.
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian ikon bawaan sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Inbox (icon="inbox")</h3>
                <x-docs.example name="empty-state.inbox" title="Variant: inbox" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Document (icon="document")</h3>
                <x-docs.example name="empty-state.document" title="Variant: document" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">3. Search (icon="search")</h3>
                <x-docs.example name="empty-state.search" title="Variant: search" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">4. Default (Folder Icon)</h3>
                <x-docs.example name="empty-state.default" title="Variant: default (folder)" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted mb-3">
            Komponen menyediakan slot <code>action</code> untuk meletakkan tombol aksi primer pembimbing alur kerja pengguna.
        </p>
        <x-docs.example name="empty-state.action" title="State: Dengan Tombol Aksi" />
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $emptyStateProps = [
                [
                    'prop' => 'title',
                    'type' => 'string',
                    'default' => 'required',
                    'description' => 'Judul tebal pesan status keadaan kosong.',
                ],
                [
                    'prop' => 'description',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Kalimat penjelasan singkat di bawah judul.',
                ],
                [
                    'prop' => 'icon',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => "Pilihan ikon bawaan: 'inbox', 'document', 'search'. Default ikon folder.",
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$emptyStateProps" />
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
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">iconSlot</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Menimpa ikon bawaan dengan elemen ikon atau ilustrasi SVG kustom.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">default ($slot)</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Konten atau catatan tambahan di bawah teks deskripsi.</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text">action</td>
                        <td class="px-4 py-3 text-sm text-text-muted">Area tombol aksi utama (Call to Action).</td>
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
            <li>Semua ikon SVG bawaan menyertakan atribut <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
            <li>Teks judul disajikan dalam tag semantik <code class="font-mono text-xs">&lt;h3&gt;</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Border putus-putus memakai <code>border-border</code>, latar <code>bg-surface</code>, dan lingkaran ikon <code>bg-primary-light text-primary</code> yang selaras dengan mode gelap.
        </p>
    </section>
</x-layout.docs>

