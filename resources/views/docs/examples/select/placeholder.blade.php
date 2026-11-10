<div class="w-full max-w-sm">
    <x-form.select
        name="metode_pembayaran"
        label="Metode Pembayaran"
        placeholder="-- Pilih Salah Satu Metode --"
        helper="Biaya administrasi dapat berbeda sesuai metode yang dipilih."
        required
    >
        <option value="bca_va">BCA Virtual Account</option>
        <option value="mandiri_va">Mandiri Virtual Account</option>
        <option value="qris">QRIS Instan</option>
        <option value="kartu_kredit">Kartu Kredit / Debit</option>
    </x-form.select>
</div>

