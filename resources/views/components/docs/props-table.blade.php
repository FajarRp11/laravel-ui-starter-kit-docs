@props([
    'rows' => [],
])

<div class="my-6 overflow-x-auto rounded-lg border border-border bg-surface">
    <table class="w-full text-left text-sm">
        <thead class="border-b border-border bg-surface-muted/70 text-xs font-semibold uppercase tracking-wider text-text-muted">
            <tr>
                <th scope="col" class="px-4 py-3">Prop</th>
                <th scope="col" class="px-4 py-3">Tipe</th>
                <th scope="col" class="px-4 py-3">Default</th>
                <th scope="col" class="px-4 py-3">Deskripsi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-border">
            @if (!empty($rows))
                @foreach ($rows as $row)
                    <tr class="hover:bg-surface-muted/40 transition-colors">
                        <td class="px-4 py-3 font-mono text-xs font-semibold text-primary-text whitespace-nowrap">
                            {{ $row['prop'] ?? $row['name'] ?? '' }}
                        </td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted whitespace-nowrap">
                            <span class="inline-block px-1.5 py-0.5 rounded bg-surface-muted border border-border">
                                {{ $row['type'] ?? 'string' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 font-mono text-xs text-text-muted whitespace-nowrap">
                            <span class="text-text font-medium">{{ $row['default'] ?? '-' }}</span>
                        </td>
                        <td class="px-4 py-3 text-xs sm:text-sm text-text-muted leading-relaxed">
                            {{ $row['description'] ?? $row['desc'] ?? '-' }}
                        </td>
                    </tr>
                @endforeach
            @else
                {{ $slot }}
            @endif
        </tbody>
    </table>
</div>

