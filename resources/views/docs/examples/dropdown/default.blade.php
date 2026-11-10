<x-ui.dropdown>
    <x-slot:trigger>
        <x-ui.button variant="secondary" size="sm">
            <span>Opsi Tindakan</span>
            <svg class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </x-ui.button>
    </x-slot:trigger>

    <a href="#edit" class="block px-4 py-2 text-xs hover:bg-surface-muted transition-colors">Edit Profil</a>
    <a href="#unduh" class="block px-4 py-2 text-xs hover:bg-surface-muted transition-colors">Unduh Rekap</a>
    <div class="border-t border-border my-1"></div>
    <a href="#logout" class="block px-4 py-2 text-xs text-danger-text hover:bg-danger-bg transition-colors">Keluar</a>
</x-ui.dropdown>

