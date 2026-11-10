<x-layout.docs title="Chart">
    {{-- 1. Header --}}
    <x-docs.page-header
        title="Chart"
        description="Komponen visualisasi grafik data berbasis Chart.js dengan sinkronisasi tema gelap otomatis via MutationObserver."
        section="Grafik"
    />

    {{-- 2. Preview --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Preview</h2>
        <x-docs.example name="chart.default" title="Grafik Garis (Line Chart)" />
    </section>

    {{-- 3. Pemakaian --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Pemakaian</h2>
        <p class="text-text-muted leading-relaxed">
            Pakai komponen Chart untuk menyajikan visualisasi data berkala (tren pendapatan, statistik pengunjung, atau diagram porsi anggaran) pada dasbor ringkasan.
            Jangan pakai Chart jika data hanya berupa satu nilai tunggal sederhana (gunakan kartu metrik statistik atau badge).
        </p>
    </section>

    {{-- 4. Variants --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Variants</h2>
        <p class="text-sm text-text-muted mb-4">Urutan varian tipe grafik sesuai definisi pada source kit:</p>

        <div class="space-y-6">
            <div>
                <h3 class="text-sm font-semibold text-text mb-1">1. Diagram Garis (type="line" - Default)</h3>
                <x-docs.example name="chart.default" title="Tipe: Line" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">2. Diagram Batang (type="bar")</h3>
                <x-docs.example name="chart.bar" title="Tipe: Bar" />
            </div>

            <div>
                <h3 class="text-sm font-semibold text-text mb-1">3. Diagram Donat (type="doughnut")</h3>
                <x-docs.example name="chart.doughnut" title="Tipe: Doughnut" />
            </div>
        </div>
    </section>

    {{-- 5. Sizes / States --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Sizes / States</h2>
        <p class="text-sm text-text-muted leading-relaxed mb-3">
            Tinggi diagram dikontrol melalui prop <code>height</code> (default <code>300</code> dalam satuan piksel). Nilai dapat berupa angka atau string unit CSS (misal <code>"400px"</code> atau <code>"50vh"</code>).
        </p>
    </section>

    {{-- 6. Props --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Props</h2>
        @php
            $chartProps = [
                [
                    'prop' => 'type',
                    'type' => 'string',
                    'default' => "'line'",
                    'description' => "Jenis diagram: 'line', 'bar', 'pie', 'doughnut', 'polarArea', 'radar'.",
                ],
                [
                    'prop' => 'labels',
                    'type' => 'array',
                    'default' => '[]',
                    'description' => 'Label kategori data pada sumbu X horizontal.',
                ],
                [
                    'prop' => 'datasets',
                    'type' => 'array',
                    'default' => '[]',
                    'description' => 'Kumpulan objek dataset data Chart.js (label, data, backgroundColor, borderColor, dll).',
                ],
                [
                    'prop' => 'options',
                    'type' => 'array',
                    'default' => '[]',
                    'description' => 'Opsi konfigurasi tambahan Chart.js untuk menimpa opsi bawaan.',
                ],
                [
                    'prop' => 'height',
                    'type' => 'int|string',
                    'default' => '300',
                    'description' => 'Tinggi kanvas grafik (angka otomatis dikonversi ke px).',
                ],
            ];
        @endphp
        <x-docs.props-table :rows="$chartProps" />
    </section>

    {{-- 7. Slots --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Slots</h2>
        <p class="text-sm text-text-muted">Komponen ini tidak memiliki slot (dirender langsung ke elemen kanvas HTML5).</p>
    </section>

    {{-- 8. Alpine.js --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Alpine.js</h2>
        <p class="text-sm text-text-muted leading-relaxed mb-3">
            Komponen menginisialisasi pustaka Chart.js via <code>initChart()</code> di Alpine.js.
            Menyertakan <code>MutationObserver</code> pada elemen root <code>document.documentElement</code> untuk mendeteksi penambahan kelas <code>dark</code> secara real-time dan memanggil <code>chart.update()</code> tanpa perlu muat ulang halaman.
        </p>
    </section>

    {{-- 9. Accessibility --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Accessibility</h2>
        <ul class="list-disc list-inside text-sm text-text-muted space-y-2">
            <li>Menyajikan teks legenda berukuran terbaca jelas.</li>
            <li>Sediakan tabel rekap tabular sebagai alternatif bagi pengguna pembaca layar jika grafik memuat angka penting.</li>
        </ul>
    </section>

    {{-- 10. Dark mode --}}
    <section class="my-8">
        <h2 class="text-xl font-bold text-text mb-3">Dark mode</h2>
        <p class="text-sm text-text-muted leading-relaxed">
            Warna garis kisi sumbu (grid) dan warna label teks legenda otomatis berganti antara warna abu-abu terang dan gelap saat preferensi tema berubah.
        </p>
    </section>
</x-layout.docs>

