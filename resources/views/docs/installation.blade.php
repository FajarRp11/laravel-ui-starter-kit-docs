<x-layout.docs title="Instalasi">
    <x-docs.page-header
        title="Instalasi"
        description="Panduan lengkap pemasangan Blade UI Kit untuk proyek Laravel baru maupun integrasi ke proyek yang sudah berjalan."
        section="Mulai"
    />

    @php
        $appCssCode = file_exists(resource_path('views/docs/examples/instalasi/app-css.blade.php'))
            ? file_get_contents(resource_path('views/docs/examples/instalasi/app-css.blade.php'))
            : '';
        $appJsCode = file_exists(resource_path('views/docs/examples/instalasi/app-js.blade.php'))
            ? file_get_contents(resource_path('views/docs/examples/instalasi/app-js.blade.php'))
            : '';
        $layoutCode = file_exists(resource_path('views/docs/examples/instalasi/layout.blade.php'))
            ? file_get_contents(resource_path('views/docs/examples/instalasi/layout.blade.php'))
            : '';
    @endphp

    {{-- 1. Requirements --}}
    <section class="my-10">
        <h2 class="text-2xl font-bold text-text mb-4">1. Requirements</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Pastikan lingkungan server lokal Anda memenuhi spesifikasi minimum berikut sebelum memasang kit:
        </p>

        <div class="overflow-x-auto rounded-lg border border-border bg-surface my-4">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-border bg-surface-muted/70 text-xs font-semibold uppercase tracking-wider text-text-muted">
                    <tr>
                        <th class="px-4 py-3">Kebutuhan</th>
                        <th class="px-4 py-3">Versi Minimum</th>
                        <th class="px-4 py-3">Cara Cek</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <tr class="hover:bg-surface-muted/40 transition-colors">
                        <td class="px-4 py-3 font-semibold text-text">PHP</td>
                        <td class="px-4 py-3 font-mono text-xs text-primary-text font-medium">^8.3</td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted"><code class="bg-surface-muted px-2 py-0.5 rounded border border-border">php -v</code></td>
                    </tr>
                    <tr class="hover:bg-surface-muted/40 transition-colors">
                        <td class="px-4 py-3 font-semibold text-text">Composer</td>
                        <td class="px-4 py-3 font-mono text-xs text-primary-text font-medium">^2.x</td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted"><code class="bg-surface-muted px-2 py-0.5 rounded border border-border">composer -V</code></td>
                    </tr>
                    <tr class="hover:bg-surface-muted/40 transition-colors">
                        <td class="px-4 py-3 font-semibold text-text">Node.js</td>
                        <td class="px-4 py-3 font-mono text-xs text-primary-text font-medium">^18.x atau ^20.x</td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted"><code class="bg-surface-muted px-2 py-0.5 rounded border border-border">node -v</code></td>
                    </tr>
                    <tr class="hover:bg-surface-muted/40 transition-colors">
                        <td class="px-4 py-3 font-semibold text-text">NPM</td>
                        <td class="px-4 py-3 font-mono text-xs text-primary-text font-medium">^9.x atau ^10.x</td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted"><code class="bg-surface-muted px-2 py-0.5 rounded border border-border">npm -v</code></td>
                    </tr>
                    <tr class="hover:bg-surface-muted/40 transition-colors">
                        <td class="px-4 py-3 font-semibold text-text">Git</td>
                        <td class="px-4 py-3 font-mono text-xs text-primary-text font-medium">Versi terpasang apa saja</td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted"><code class="bg-surface-muted px-2 py-0.5 rounded border border-border">git --version</code></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <x-docs.callout type="tip" title="Lingkungan Lokal Fleksibel">
            Kit dapat berjalan mulus di Laragon, Laravel Herd, Valet, Docker, maupun server CLI bawaan via perintah <code>php artisan serve</code>.
        </x-docs.callout>
    </section>

    {{-- 2. Pilih cara pakai --}}
    <section class="my-10">
        <h2 class="text-2xl font-bold text-text mb-4">2. Pilih Cara Pakai</h2>
        <p class="text-text-muted leading-relaxed mb-6">
            Terdapat dua metode instalasi sesuai kondisi proyek yang Anda kerjakan:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Cara A --}}
            <div class="p-6 rounded-xl border-2 border-primary/40 bg-surface relative flex flex-col justify-between shadow-xs">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-primary-light text-primary-text border border-primary/20">
                            Direkomendasikan
                        </span>
                        <span class="text-xs font-mono text-text-muted">Metode A</span>
                    </div>
                    <h3 class="text-lg font-bold text-text mb-2">Clone Starter Project Baru</h3>
                    <p class="text-sm text-text-muted leading-relaxed">
                        Cocok untuk membangun aplikasi baru dari awal. Seluruh konfigurasi framework Laravel, Vite, Tailwind CSS v4, Alpine.js, dan Chart.js sudah siap pakai tanpa perlu konfigurasi manual.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-border">
                    <a href="#cara-a" class="text-sm font-semibold text-primary-text hover:underline inline-flex items-center gap-1">
                        Lihat panduan Cara A &darr;
                    </a>
                </div>
            </div>

            {{-- Cara B --}}
            <div class="p-6 rounded-xl border border-border bg-surface flex flex-col justify-between shadow-xs">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-surface-muted text-text-muted border border-border">
                            Integrasi
                        </span>
                        <span class="text-xs font-mono text-text-muted">Metode B</span>
                    </div>
                    <h3 class="text-lg font-bold text-text mb-2">Pasang Manual ke Proyek Ada</h3>
                    <p class="text-sm text-text-muted leading-relaxed">
                        Cocok jika Anda sudah memiliki aplikasi Laravel yang sedang berjalan dan ingin menyalin kumpulan komponen Blade, variabel token OKLCH, serta dependensi JavaScript ke proyek Anda.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-border">
                    <a href="#cara-b" class="text-sm font-semibold text-text hover:text-primary-text hover:underline inline-flex items-center gap-1">
                        Lihat panduan Cara B &darr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Cara A: Clone starter kit --}}
    <section id="cara-a" class="my-10 pt-4">
        <h2 class="text-2xl font-bold text-text mb-2">3. Cara A: Clone Starter Kit</h2>
        <p class="text-text-muted leading-relaxed mb-6">
            Langkah cepat untuk mengklona repositori dan menjalankan proyek starter baru:
        </p>

        <div class="space-y-6">
            {{-- Langkah 1 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">1</span>
                    <span>Clone repositori dan masuk ke folder proyek</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Unduh salinan repositori starter kit dari Git dan buka direktori proyek di terminal.</p>
                <x-docs.code lang="bash" code="git clone https://github.com/argenesia/laravel-ui-starter-kit.git my-app && cd my-app" />
            </div>

            {{-- Langkah 2 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">2</span>
                    <span>Install dependensi PHP via Composer</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Pasang seluruh pustaka backend Laravel yang terdaftar di composer.json.</p>
                <x-docs.code lang="bash" code="composer install" />
            </div>

            {{-- Langkah 3 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">3</span>
                    <span>Duplikasi file konfigurasi lingkungan (.env)</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Salin berkas konfigurasi template .env.example menjadi .env lokal.</p>
                <div class="space-y-2">
                    <p class="text-[11px] font-mono text-text-muted">Linux / macOS / Git Bash:</p>
                    <x-docs.code lang="bash" code="cp .env.example .env" />
                    <p class="text-[11px] font-mono text-text-muted">Windows Command Prompt (CMD):</p>
                    <x-docs.code lang="bash" code="copy .env.example .env" />
                </div>
            </div>

            {{-- Langkah 4 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">4</span>
                    <span>Generate kunci enkripsi aplikasi</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Buat nilai unik APP_KEY untuk keamanan enkripsi sesi dan cookie Laravel.</p>
                <x-docs.code lang="bash" code="php artisan key:generate" />
            </div>

            {{-- Langkah 5 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">5</span>
                    <span>Install dependensi Node.js frontend</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Pasang dependensi Tailwind CSS v4, Alpine.js, dan Chart.js ke node_modules.</p>
                <x-docs.code lang="bash" code="npm install" />
            </div>

            {{-- Langkah 6 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">6</span>
                    <span>Inisialisasi Database</span>
                </div>
                <p class="text-xs text-text-muted leading-relaxed mb-3">
                    Kit secara default memakai database SQLite (<code>DB_CONNECTION=sqlite</code>) dan sesi berbasis database (<code>SESSION_DRIVER=database</code>). Jalankan migrasi untuk membuat tabel bawaan:
                </p>
                <x-docs.code lang="bash" code="php artisan migrate" />
                <p class="text-xs text-text-muted mt-2">
                    <em>Catatan:</em> Jika Anda ingin menjalankan kit tanpa database sama sekali (misal untuk situs statis), ubah <code>SESSION_DRIVER=file</code> dan <code>CACHE_STORE=file</code> di file <code>.env</code>.
                </p>
            </div>

            {{-- Langkah 7 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">7</span>
                    <span>Jalankan Vite dev server (Terminal 1)</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Biarkan terminal ini terus berjalan untuk menyusun ulang asset CSS dan JS secara otomatis saat file diedit.</p>
                <x-docs.code lang="bash" code="npm run dev" />
            </div>

            {{-- Langkah 8 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">8</span>
                    <span>Jalankan web server Laravel (Terminal 2)</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Jalankan server PHP lokal di jendela terminal kedua.</p>
                <x-docs.code lang="bash" code="php artisan serve" />
            </div>

            {{-- Langkah 9 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">9</span>
                    <span>Buka aplikasi di peramban</span>
                </div>
                <p class="text-xs text-text-muted mb-2">Akses tautan lokal berikut di peramban web:</p>
                <div class="p-3 rounded bg-surface-muted font-mono text-xs text-primary-text font-medium border border-border">
                    http://localhost:8000
                </div>
                <p class="text-xs text-text-muted mt-2">
                    Halaman selamat datang (welcome) kit akan muncul di layar menampilkan integrasi font dan status token.
                </p>
            </div>
        </div>

        {{-- Mulai project sendiri --}}
        <div class="mt-8 p-6 rounded-xl border border-border bg-surface-muted/50">
            <h3 class="text-base font-bold text-text mb-2">Mulai Project Sendiri</h3>
            <p class="text-sm text-text-muted leading-relaxed mb-4">
                Untuk memutuskan riwayat commit Git dari repositori template kit dan memulai repositori bersih milik Anda sendiri:
            </p>
            <div class="space-y-3">
                <p class="text-xs font-semibold text-text">1. Hapus direktori .git lama:</p>
                <x-docs.code lang="bash" code="rm -rf .git" />
                <p class="text-[11px] text-text-muted">Untuk pengguna Windows PowerShell: <code>Remove-Item -Recurse -Force .git</code></p>

                <p class="text-xs font-semibold text-text mt-3">2. Inisialisasi repositori Git baru:</p>
                <x-docs.code lang="bash" code="git init && git add . && git commit -m &quot;feat: inisialisasi proyek baru&quot;" />

                <p class="text-xs font-semibold text-text mt-3">3. Sesuaikan nama aplikasi di file .env:</p>
                <x-docs.code lang="bash" code="APP_NAME=&quot;NamaProyekAnda&quot;" />
            </div>
        </div>
    </section>

    {{-- 4. Cara B: Pasang manual --}}
    <section id="cara-b" class="my-10 pt-4">
        <h2 class="text-2xl font-bold text-text mb-2">4. Cara B: Pasang Manual ke Proyek Ada</h2>
        <p class="text-text-muted leading-relaxed mb-6">
            Gunakan langkah ini untuk menambahkan Blade UI Kit ke dalam proyek Laravel yang sudah berjalan:
        </p>

        <div class="space-y-6">
            {{-- Langkah 1 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">1</span>
                    <span>Install dependensi JavaScript</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Pasang pustaka Tailwind CSS v4, Alpine.js, dan Chart.js dengan perintah npm:</p>
                <x-docs.code lang="bash" code="npm install alpinejs@^3.17.5 chart.js@^4.6.1 tailwindcss@^4.0.0 @tailwindcss/vite@^4.0.0" />
            </div>

            {{-- Langkah 2 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">2</span>
                    <span>Salin folder komponen Blade</span>
                </div>
                <p class="text-xs text-text-muted leading-relaxed mb-3">
                    Salin seluruh isi direktori <code>resources/views/components/</code> dari kit ke direktori <code>resources/views/components/</code> pada proyek Anda, yang meliputi 3 subfolder:
                </p>
                <ul class="list-disc list-inside text-xs text-text-muted space-y-1 font-mono">
                    <li>components/ui/ (alert, avatar, badge, button, card, chart, dropdown, empty-state, modal, spinner, table)</li>
                    <li>components/form/ (checkbox, input, select, textarea)</li>
                    <li>components/layout/ (admin, sidebar, topbar)</li>
                </ul>
            </div>

            {{-- Langkah 3 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">3</span>
                    <span>Salin token warna ke resources/css/app.css</span>
                </div>
                <p class="text-xs text-text-muted mb-3">
                    Ganti isi berkas <code>resources/css/app.css</code> Anda dengan konfigurasi token OKLCH lengkap dari kit:
                </p>
                <x-docs.code language="css" :code="$appCssCode" />
            </div>

            {{-- Langkah 4 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">4</span>
                    <span>Daftarkan Alpine.js dan Chart.js di resources/js/app.js</span>
                </div>
                <p class="text-xs text-text-muted mb-3">
                    Inisialisasi Alpine.js dan daftarkan Chart.js ke objek global window pada berkas <code>resources/js/app.js</code>:
                </p>
                <x-docs.code language="javascript" :code="$appJsCode" />
            </div>

            {{-- Langkah 5 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">5</span>
                    <span>Pasang @@vite dan Script Dark Mode pada Layout</span>
                </div>
                <p class="text-xs text-text-muted mb-3">
                    Tambahkan pemanggilan <code>@@vite</code> serta script anti-flash pada tag <code>&lt;head&gt;</code> di layout utama Anda:
                </p>
                <x-docs.code language="blade" :code="$layoutCode" />
            </div>

            {{-- Langkah 6 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">6</span>
                    <span>Pastikan Tailwind memindai file Blade</span>
                </div>
                <p class="text-xs text-text-muted leading-relaxed mb-3">
                    Tailwind CSS v4 menggunakan direktif <code>@source</code> untuk memindai kelas. Pastikan baris berikut terdaftar di <code>resources/css/app.css</code>:
                </p>
                <x-docs.code language="css" code="@source '../../storage/framework/views/*.php';" />
            </div>

            {{-- Langkah 7 --}}
            <div class="p-5 rounded-lg border border-border bg-surface">
                <div class="flex items-center gap-2 mb-2 font-semibold text-sm text-text">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary-light text-primary-text text-xs">7</span>
                    <span>Jalankan npm run dev</span>
                </div>
                <p class="text-xs text-text-muted mb-3">Kompilasi seluruh asset frontend Anda dengan Vite dev server:</p>
                <x-docs.code lang="bash" code="npm run dev" />
            </div>
        </div>
    </section>

    {{-- 5. Cek instalasi berhasil --}}
    <section class="my-10">
        <h2 class="text-2xl font-bold text-text mb-2">5. Cek Instalasi Berhasil</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Lakukan verifikasi checklist berikut untuk memastikan setiap bagian kit telah berfungsi optimal:
        </p>

        {{-- Interactive Checklist --}}
        <div
            x-data="{ checked: {} }"
            class="p-5 rounded-lg border border-border bg-surface space-y-3 mb-6"
        >
            <h4 class="text-xs font-semibold uppercase tracking-wider text-text-muted mb-3">Checklist Verifikasi:</h4>
            
            <label class="flex items-center gap-3 text-sm text-text cursor-pointer select-none">
                <input
                    type="checkbox"
                    x-model="checked[1]"
                    class="h-4 w-4 rounded-sm border-border text-primary focus:ring-ring cursor-pointer"
                />
                <span :class="{ 'line-through text-text-muted': checked[1] }">Halaman demo/komponen terbuka tanpa error</span>
            </label>

            <label class="flex items-center gap-3 text-sm text-text cursor-pointer select-none">
                <input
                    type="checkbox"
                    x-model="checked[2]"
                    class="h-4 w-4 rounded-sm border-border text-primary focus:ring-ring cursor-pointer"
                />
                <span :class="{ 'line-through text-text-muted': checked[2] }"><code class="text-xs font-mono px-1.5 py-0.5 rounded bg-surface-muted border border-border">&lt;x-ui.button&gt;</code> tampil dengan warna primary (emerald)</span>
            </label>

            <label class="flex items-center gap-3 text-sm text-text cursor-pointer select-none">
                <input
                    type="checkbox"
                    x-model="checked[3]"
                    class="h-4 w-4 rounded-sm border-border text-primary focus:ring-ring cursor-pointer"
                />
                <span :class="{ 'line-through text-text-muted': checked[3] }">Toggle dark mode mengganti tema, dan tidak berkedip saat refresh</span>
            </label>

            <label class="flex items-center gap-3 text-sm text-text cursor-pointer select-none">
                <input
                    type="checkbox"
                    x-model="checked[4]"
                    class="h-4 w-4 rounded-sm border-border text-primary focus:ring-ring cursor-pointer"
                />
                <span :class="{ 'line-through text-text-muted': checked[4] }">Modal/dropdown bisa dibuka (tanda Alpine.js jalan)</span>
            </label>

            <label class="flex items-center gap-3 text-sm text-text cursor-pointer select-none">
                <input
                    type="checkbox"
                    x-model="checked[5]"
                    class="h-4 w-4 rounded-sm border-border text-primary focus:ring-ring cursor-pointer"
                />
                <span :class="{ 'line-through text-text-muted': checked[5] }">Chart tampil (tanda Chart.js jalan)</span>
            </label>
        </div>

        <p class="text-sm font-semibold text-text mb-2">Snippet Uji Mandiri (Tempel ke view mana saja):</p>
        <x-docs.example name="instalasi.test-snippet" title="Snippet Verifikasi Komponen" />
    </section>

    {{-- 6. Troubleshooting --}}
    <section class="my-10">
        <h2 class="text-2xl font-bold text-text mb-4">6. Troubleshooting</h2>
        <p class="text-text-muted leading-relaxed mb-6">
            Daftar solusi atas kendala umum selama proses instalasi dan konfigurasi kit:
        </p>

        <div class="space-y-4">
            {{-- Gejala 1 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text font-mono">"Unable to locate file in Vite manifest"</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Dev server Vite belum dihidupkan atau aset build produksi belum dikompilasi.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Jalankan <code class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">npm run dev</code> di terminal terpisah saat pengembangan, atau jalankan <code class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">npm run build</code> sebelum deploy.</p>
            </div>

            {{-- Gejala 2 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text">Class Tailwind tidak ter-apply pada komponen Blade</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Template Blade yang terkompilasi belum dimasukkan ke direktif pemindaian sumber Tailwind CSS v4.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Tambahkan baris <code class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">@source '../../storage/framework/views/*.php';</code> pada <code class="text-xs">resources/css/app.css</code>.</p>
            </div>

            {{-- Gejala 3 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text">Komponen &lt;x-ui.*&gt; atau &lt;x-form.*&gt; tidak ditemukan</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Struktur subdirektori komponen ditaruh di luar path baku Laravel.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Pastikan folder diletakkan di <code class="text-xs">resources/views/components/ui/</code> dan <code class="text-xs">resources/views/components/form/</code>.</p>
            </div>

            {{-- Gejala 4 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text">Dropdown atau Modal tidak bereaksi saat diklik</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Alpine.js belum di-import atau fungsi <code class="text-xs">Alpine.start()</code> belum terpanggil.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Pastikan file <code class="text-xs">resources/js/app.js</code> memuat <code class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">import Alpine from 'alpinejs'; window.Alpine = Alpine; Alpine.start();</code>.</p>
            </div>

            {{-- Gejala 5 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text">Warna token pudar atau dark mode tidak merespons</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Blok CSS token <code class="text-xs">:root</code>, <code class="text-xs">.dark</code>, atau <code class="text-xs">@theme inline</code> belum disalin lengkap ke <code class="text-xs">app.css</code>.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Salin kembali seluruh blok token CSS dari panduan Cara B Langkah 3 ke dalam <code class="text-xs">resources/css/app.css</code>.</p>
            </div>

            {{-- Gejala 6 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text">Layar berkedip putih sekejap saat refresh di mode gelap</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Kelas <code class="text-xs">.dark</code> baru disematkan setelah bundle JavaScript dieksekusi.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Letakkan inline script pembacaan <code class="text-xs">localStorage</code> langsung di bagian paling atas tag <code class="text-xs">&lt;head&gt;</code> sebelum tag <code class="text-xs">@@vite</code>.</p>
            </div>

            {{-- Gejala 7 --}}
            <div class="p-4 rounded-lg border border-border bg-surface">
                <div class="flex items-start gap-2 mb-2">
                    <span class="inline-block px-2 py-0.5 rounded text-[11px] font-bold bg-danger-bg text-danger-text">Gejala</span>
                    <h4 class="text-sm font-semibold text-text">Komponen &lt;x-ui.chart&gt; kosong dan kanvas tidak merender grafik</h4>
                </div>
                <p class="text-xs text-text-muted mb-1"><strong>Penyebab:</strong> Library Chart.js belum di-bind ke objek global window.</p>
                <p class="text-xs text-text"><strong>Solusi:</strong> Pastikan baris <code class="px-1.5 py-0.5 rounded bg-surface-muted border text-xs">import Chart from 'chart.js/auto'; window.Chart = Chart;</code> ada di file <code class="text-xs">resources/js/app.js</code>.</p>
            </div>
        </div>
    </section>

    {{-- 7. Memperbarui kit --}}
    <section class="my-10 pt-4 border-t border-border">
        <h2 class="text-2xl font-bold text-text mb-2">7. Memperbarui Kit</h2>
        <p class="text-text-muted leading-relaxed mb-4">
            Jika repositori pusat kit merilis perbaikan atau varian komponen baru, gunakan strategi sinkronisasi berikut:
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-4">
            <div class="p-5 rounded-lg border border-border bg-surface">
                <h4 class="font-bold text-sm text-text mb-2">Untuk Pengguna Cara A (Starter Project)</h4>
                <p class="text-xs text-text-muted mb-3">Tautkan repositori kit sebagai git remote upstream untuk menarik patch terbaru:</p>
                <x-docs.code lang="bash" code="git remote add upstream https://github.com/argenesia/laravel-ui-starter-kit.git
git fetch upstream
git merge upstream/main" />
            </div>

            <div class="p-5 rounded-lg border border-border bg-surface">
                <h4 class="font-bold text-sm text-text mb-2">Untuk Pengguna Cara B (Manual)</h4>
                <p class="text-xs text-text-muted mb-3">Salin ulang direktori komponen yang diperbarui dan tinjau perubahan variabel warna:</p>
                <ul class="list-disc list-inside text-xs text-text-muted space-y-1">
                    <li>Salin berkas komponen Blade baru ke <code class="font-mono text-xs">resources/views/components/</code>.</li>
                    <li>Periksa diff perubahan token warna baru pada berkas <code class="font-mono text-xs">resources/css/app.css</code>.</li>
                    <li>Jalankan <code class="font-mono text-xs">npm run build</code> ulang.</li>
                </ul>
            </div>
        </div>

        <div class="flex items-center gap-2 mt-6 p-4 rounded-lg bg-surface-muted border border-border text-xs text-text-muted">
            <span class="font-semibold text-text">Versi Acuan Kit Dokumentasi:</span>
            <code class="px-2 py-0.5 rounded bg-surface font-mono font-bold text-primary-text border border-border">
                commit {{ config('docs.kit_hash', 'unknown') }}
            </code>
        </div>
    </section>
</x-layout.docs>
