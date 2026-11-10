<x-layout.docs title="Avatar">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Avatar"
        description="Komponen visual untuk menampilkan foto profil pengguna, inisial nama, atau siluet placeholder."
        section="Komponen UI"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="avatar.default" title="Contoh Dasar Inisial" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Avatar untuk identitas pengguna pada topbar navigasi, daftar komentar, tabel anggota tim, atau kartu profil.
            Jangan pakai Avatar untuk thumbnail produk toko online atau pratinjau dokumen file (gunakan elemen gambar biasa dengan rasio aspek yang sesuai).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian render berbasis data prop pada source:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Image (Foto Profil)</h3>
                <x-docs.example name="avatar.image" title="Varian Foto (src)" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Inisial Nama</h3>
                <x-docs.example name="avatar.initials" title="Varian Inisial (name)" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">3. Placeholder Ikon</h3>
                <x-docs.example name="avatar.placeholder" title="Varian Default Placeholder" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Ukuran (Sizes)</h3>
                <p class="text-sm text-text-muted mb-2">Tersedia opsi <code>xs</code>, <code>sm</code>, <code>md</code> (default), <code>lg</code>, dan <code>xl</code>.</p>
                <x-docs.example name="avatar.sizes" title="Ukuran Avatar" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">Bentuk (Shapes)</h3>
                <p class="text-sm text-text-muted mb-2">Tersedia bentuk <code>circle</code> (default) dan <code>square</code>.</p>
                <x-docs.example name="avatar.shapes" title="Bentuk Avatar" />
            </div>
        </div>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $avatarProps = [
                [
                    'prop' => 'src',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'URL gambar foto profil pengguna.',
                ],
                [
                    'prop' => 'name',
                    'type' => 'string|null',
                    'default' => 'null',
                    'description' => 'Nama lengkap pengguna. Otomatis diekstrak 2 huruf kapital sebagai inisial dan teks alt.',
                ],
                [
                    'prop' => 'size',
                    'type' => 'string',
                    'default' => "'md'",
                    'description' => "Ukuran dimensi avatar: 'xs', 'sm', 'md', 'lg', 'xl'.",
                ],
                [
                    'prop' => 'shape',
                    'type' => 'string',
                    'default' => "'circle'",
                    'description' => "Bentuk potongan avatar: 'circle' (lingkaran) atau 'square' (kotak bersudut rounded).",
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$avatarProps" />
    </section>

    {{-- 7. Slots --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Slots</h2>
        <p class="text-sm text-text-muted">Komponen ini tidak memiliki slot khusus. Seluruh rendering diatur lewat props <code>src</code> dan <code>name</code>.</p>
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
            <li>Elemen <code class="font-mono text-xs">&lt;img&gt;</code> menyertakan atribut <code class="font-mono text-xs">alt</code> otomatis yang bersumber dari prop <code class="font-mono text-xs">name</code>.</li>
            <li>Ikon siluet placeholder dilengkapi atribut <code class="font-mono text-xs">aria-hidden="true"</code>.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Inisial nama memakai token <code>bg-primary-light</code> dan <code>text-primary-text</code>, sedangkan placeholder menggunakan <code>bg-surface-muted</code> dan <code>text-text-muted</code>. Otomatis selaras dengan tema gelap.
        </p>
    </section>
</x-layout.docs>

