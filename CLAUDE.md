# Blade UI Docs

Situs dokumentasi untuk Blade UI Kit (Laravel + Blade + Alpine.js + Tailwind).
Docs ini adalah aplikasi Laravel yang memakai kit-nya sendiri.

## Sumber kebenaran

- Kit ada di `../blade-ui-kit` (READ ONLY, jangan pernah edit).
- Props, default, slot, dan perilaku komponen HANYA boleh diambil dari
  source code komponen di kit (`@props()`, slot, x-data, dll).
- Kalau info tidak ada di source, tulis "belum terdokumentasi" dan tanya user.
  JANGAN menebak atau mengarang prop.

## Aturan contoh kode

- Setiap contoh disimpan sebagai file di `resources/views/docs/examples/{komponen}/{nama}.blade.php`.
- Halaman docs menampilkan contoh lewat `<x-docs.example name="button.primary" />`,
  yang merender file itu DAN menampilkan isi file yang sama sebagai kode.
  Dengan begitu kode yang tampil = kode yang dirender, tidak bisa beda.
- Contoh harus jalan. Setelah menulis contoh, buka halamannya dan pastikan tidak error.
- Setiap contoh harus tampil benar di light dan dark mode.

## Struktur docs

- `routes/web.php`: satu route per halaman
- `resources/views/docs/` : halaman (getting-started, theming, components/_, charts, recipes/_)
- `resources/views/docs/examples/` : contoh kode
- `resources/views/components/` : komponen kit (hasil copy, jangan diubah manual,
  update lewat copy ulang dari `../blade-ui-kit`)
- `resources/views/components/docs/` : komponen khusus docs (example, props-table, code, callout, page-header)

## Gaya penulisan

- Bahasa Indonesia, santai tapi jelas
- Kalimat pendek, langsung ke contoh
- Istilah teknis (props, slot, variant, token) tetap bahasa Inggris

## Hosting

- Target: InfinityFree (tanpa SSH, tanpa composer di server)
- Docs tidak boleh butuh database. Pakai SESSION_DRIVER=file, CACHE_STORE=file.
- Jangan tambah package yang butuh proses server (queue, websocket, dll)

## Versi

- Setiap halaman docs menampilkan commit hash kit yang jadi acuan
  (ambil dari `git -C ../blade-ui-kit rev-parse --short HEAD`, simpan di config/docs.php)

## Struktur Halaman Komponen (WAJIB & URUT)

1. `<x-docs.page-header>` : nama komponen + 1 kalimat deskripsi
2. **Preview** : `<x-docs.example name="{komponen}.default" />` (contoh paling dasar)
3. **Pemakaian** : kapan dipakai, kapan jangan (2-3 kalimat)
4. **Variants** : satu `<x-docs.example>` per variant, urut seperti di source
5. **Sizes / States** (kalau ada): disabled, loading, error, dst
6. **Props** : `<x-docs.props-table>` dengan kolom: Prop | Tipe | Default | Deskripsi
   (isi dari `@props()` di source, bukan tebakan)
7. **Slots** (kalau ada): nama slot + fungsinya
8. **Alpine.js** (kalau komponen interaktif): state apa yang dipakai,
   cara kontrol dari luar (contoh: buka modal dari tombol lain)
9. **Accessibility** : atribut ARIA, keyboard, yang sudah ditangani komponen
10. **Dark mode** : catatan kalau ada hal khusus (kalau tidak ada, hapus bagian ini)

### Aturan Tambahan Komponen:
- Maksimal 1 halaman layar per bagian, jangan bertele-tele
- Jangan menulis fitur yang tidak ada di source
- Contoh pakai data realistis (nama, harga, status), bukan "foo bar"
