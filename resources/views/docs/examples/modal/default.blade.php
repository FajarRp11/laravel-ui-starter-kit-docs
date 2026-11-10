<x-ui.modal id="modal-konfirmasi" title="Konfirmasi Penghapusan">
    <x-slot:trigger>
        <x-ui.button variant="danger">
            Hapus Akun Pengguna
        </x-ui.button>
    </x-slot:trigger>

    <p class="text-sm text-text-muted leading-relaxed">
        Apakah Anda yakin ingin menghapus akun <strong>Budi Santoso</strong>? Tindakan ini bersifat permanen dan tidak dapat dibatalkan.
    </p>

    <x-slot:footer>
        <x-ui.button variant="secondary" @click="open = false">
            Batal
        </x-ui.button>
        <x-ui.button variant="danger" @click="open = false">
            Ya, Hapus Sekarang
        </x-ui.button>
    </x-slot:footer>
</x-ui.modal>

