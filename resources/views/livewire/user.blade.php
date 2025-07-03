<div>
    @if (!$showList)
        <button wire:click="mostrarLista">Ver lista de usuarios</button>
    @else
        <livewire:list-user />
    @endif
    <div>
    <button wire:click="irALaLista">Ir a la lista</button>
    <div>
</div>
</div>
</div>