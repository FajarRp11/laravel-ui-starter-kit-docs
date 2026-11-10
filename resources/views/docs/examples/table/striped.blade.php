<x-ui.table striped>
    <x-slot:head>
        <tr>
            <th scope="col" class="px-4 py-3">ID Faktur</th>
            <th scope="col" class="px-4 py-3">Tanggal</th>
            <th scope="col" class="px-4 py-3 text-right">Nominal</th>
        </tr>
    </x-slot:head>

    <tr>
        <td class="px-4 py-3 font-mono font-medium">INV-001</td>
        <td class="px-4 py-3 text-text-muted">01 Nov 2026</td>
        <td class="px-4 py-3 text-right font-mono">Rp 500.000</td>
    </tr>
    <tr>
        <td class="px-4 py-3 font-mono font-medium">INV-002</td>
        <td class="px-4 py-3 text-text-muted">02 Nov 2026</td>
        <td class="px-4 py-3 text-right font-mono">Rp 750.000</td>
    </tr>
    <tr>
        <td class="px-4 py-3 font-mono font-medium">INV-003</td>
        <td class="px-4 py-3 text-text-muted">03 Nov 2026</td>
        <td class="px-4 py-3 text-right font-mono">Rp 1.100.000</td>
    </tr>

    <x-slot:foot>
        <tr>
            <td colspan="2" class="px-4 py-3">Total Akumulasi</td>
            <td class="px-4 py-3 text-right font-mono text-primary-text">Rp 2.350.000</td>
        </tr>
    </x-slot:foot>
</x-ui.table>

