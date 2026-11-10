<div class="w-full flex justify-center">
    <div class="w-full max-w-xs">
        <x-ui.chart
            type="doughnut"
            :labels="['Berhasil', 'Tertunda', 'Gagal']"
            :datasets="[
                [
                    'data' => [65, 25, 10],
                    'backgroundColor' => ['#10b981', '#f59e0b', '#ef4444'],
                ]
            ]"
            :height="260"
        />
    </div>
</div>

