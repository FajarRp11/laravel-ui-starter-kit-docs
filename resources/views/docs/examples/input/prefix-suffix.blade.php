<div class="space-y-4 w-full max-w-sm">
    <x-form.input
        name="biaya_layanan"
        label="Nominal Pembayaran"
        type="number"
        value="150000"
    >
        <x-slot:prefix>
            <span class="text-xs font-semibold text-text-muted">Rp</span>
        </x-slot:prefix>
    </x-form.input>

    <x-form.input
        name="email_kantor"
        label="Alamat Surel Bisnis"
        type="email"
        placeholder="nama@perusahaan.co.id"
    >
        <x-slot:suffix>
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </x-slot:suffix>
    </x-form.input>
</div>

