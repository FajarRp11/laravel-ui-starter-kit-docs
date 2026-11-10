<x-ui.table>
    <x-slot:head>
        <tr>
            <th scope="col" class="px-4 py-3">Nama Pelanggan</th>
            <th scope="col" class="px-4 py-3">Status</th>
            <th scope="col" class="px-4 py-3 text-right">Total Transaksi</th>
        </tr>
    </x-slot:head>

    <tr>
        <td class="px-4 py-3 font-medium">Budi Santoso</td>
        <td class="px-4 py-3"><x-ui.badge variant="success" size="sm">Lunas</x-ui.badge></td>
        <td class="px-4 py-3 text-right font-mono">Rp 450.000</td>
    </tr>
    <tr>
        <td class="px-4 py-3 font-medium">Siti Rahmawati</td>
        <td class="px-4 py-3"><x-ui.badge variant="warning" size="sm">Tertunda</x-ui.badge></td>
        <td class="px-4 py-3 text-right font-mono">Rp 1.200.000</td>
    </tr>
    <tr>
        <td class="px-4 py-3 font-medium">Ahmad Dahlan</td>
        <td class="px-4 py-3"><x-ui.badge variant="neutral" size="sm">Draf</x-ui.badge></td>
        <td class="px-4 py-3 text-right font-mono">Rp 300.000</td>
    </tr>
</x-ui.table>

