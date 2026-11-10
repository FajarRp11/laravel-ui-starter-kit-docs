<x-ui.modal id="modal-form-tambah" title="Tambah Pelanggan Baru" size="md">
    <x-slot:trigger>
        <x-ui.button variant="primary">
            + Pelanggan Baru
        </x-ui.button>
    </x-slot:trigger>

    <div class="space-y-4">
        <div>
            <label class="block text-xs font-semibold text-text mb-1">Nama Lengkap</label>
            <input type="text" placeholder="Contoh: Rina Melati" class="w-full px-3 py-2 text-sm rounded border border-border bg-surface text-text focus:outline-none focus:ring-2 focus:ring-ring" />
        </div>
        <div>
            <label class="block text-xs font-semibold text-text mb-1">Alamat Email</label>
            <input type="email" placeholder="rina@example.com" class="w-full px-3 py-2 text-sm rounded border border-border bg-surface text-text focus:outline-none focus:ring-2 focus:ring-ring" />
        </div>
    </div>

    <x-slot:footer>
        <x-ui.button variant="secondary" @click="open = false">Batal</x-ui.button>
        <x-ui.button variant="primary" @click="open = false">Simpan Pelanggan</x-ui.button>
    </x-slot:footer>
</x-ui.modal>

