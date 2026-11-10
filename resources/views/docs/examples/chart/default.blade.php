<div class="w-full">
    <x-ui.chart
        type="line"
        :labels="['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun']"
        :datasets="[
            [
                'label' => 'Penjualan 2026 (Juta Rp)',
                'data' => [12, 19, 15, 25, 22, 30],
                'borderColor' => '#10b981',
                'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                'fill' => true,
                'tension' => 0.3,
            ]
        ]"
        :height="260"
    />
</div>

