<div class="w-full">
    <x-ui.chart
        type="bar"
        :labels="['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']"
        :datasets="[
            [
                'label' => 'Transaksi Harian',
                'data' => [45, 52, 38, 65, 80],
                'backgroundColor' => '#059669',
                'borderRadius' => 6,
            ]
        ]"
        :height="260"
    />
</div>

