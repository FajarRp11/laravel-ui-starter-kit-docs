<div class="p-6 rounded-lg border border-border bg-surface text-text space-y-4 max-w-md w-full">
    <div class="flex items-center justify-between">
        <h4 class="font-bold text-base text-text">Verifikasi Blade UI Kit</h4>
        <x-ui.badge variant="success" dot>Aktif</x-ui.badge>
    </div>

    <p class="text-sm text-text-muted leading-relaxed">
        Jika komponen ini memiliki warna emerald dan modal dapat dibuka, instalasi kit Anda telah sukses.
    </p>

    <x-ui.modal id="modal-verifikasi" title="Modal Berhasil Terbuka">
        <x-slot:trigger>
            <x-ui.button variant="primary" size="sm">
                Tes Interaksi Modal
            </x-ui.button>
        </x-slot:trigger>

        <p class="text-sm text-text-muted leading-relaxed">
            Selamat! Alpine.js, styling Tailwind CSS v4, dan komponen Blade UI Kit telah berjalan dengan sempurna pada proyek Anda.
        </p>

        <x-slot:footer>
            <x-ui.button variant="primary" size="sm" @click="open = false">
                Tutup Dialog
            </x-ui.button>
        </x-slot:footer>
    </x-ui.modal>
</div>

