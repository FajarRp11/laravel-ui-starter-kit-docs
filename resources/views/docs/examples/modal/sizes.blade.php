<div class="flex flex-wrap items-center gap-3">
    <x-ui.modal id="modal-size-sm" title="Modal Kecil (sm)" size="sm">
        <x-slot:trigger>
            <x-ui.button variant="secondary" size="sm">Buka Ukuran SM</x-ui.button>
        </x-slot:trigger>
        <p class="text-sm text-text-muted">Dialog ukuran ringkas untuk konfirmasi cepat satu pertanyaan.</p>
    </x-ui.modal>

    <x-ui.modal id="modal-size-lg" title="Modal Luas (lg)" size="lg">
        <x-slot:trigger>
            <x-ui.button variant="secondary" size="sm">Buka Ukuran LG</x-ui.button>
        </x-slot:trigger>
        <p class="text-sm text-text-muted">Dialog ukuran besar cocok untuk menampilkan rincian tabel transaksi atau formulir dengan banyak input.</p>
    </x-ui.modal>
</div>

