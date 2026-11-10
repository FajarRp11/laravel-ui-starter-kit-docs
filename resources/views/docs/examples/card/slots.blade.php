<x-ui.card class="max-w-md w-full">
    <x-slot:header>
        <div class="flex items-center justify-between">
            <h4 class="font-semibold text-text">Detail Tagihan</h4>
            <x-ui.badge variant="warning">Belum Bayar</x-ui.badge>
        </div>
    </x-slot:header>

    <div class="space-y-2 text-sm">
        <div class="flex justify-between">
            <span class="text-text-muted">Nomor Faktur:</span>
            <span class="font-mono text-text">INV-2026-001</span>
        </div>
        <div class="flex justify-between">
            <span class="text-text-muted">Total Pembayaran:</span>
            <span class="font-bold text-text">Rp 1.250.000</span>
        </div>
    </div>

    <x-slot:footer>
        <div class="flex justify-end gap-2">
            <x-ui.button variant="secondary" size="sm">Nanti Saja</x-ui.button>
            <x-ui.button variant="primary" size="sm">Bayar Sekarang</x-ui.button>
        </div>
    </x-slot:footer>
</x-ui.card>

