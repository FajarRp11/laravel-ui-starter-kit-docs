<div class="space-y-4 w-full max-w-md">
    <x-form.textarea
        name="catatan_ringkas"
        label="Ringkasan (rows=2)"
        :rows="2"
        placeholder="Ringkasan 2 baris..."
    />

    <x-form.textarea
        name="catatan_detail"
        label="Laporan Lengkap (rows=6)"
        :rows="6"
        placeholder="Penjelasan kronologi mendalam..."
    />
</div>

