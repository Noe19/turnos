<div>
    @if (!$showList)
        <button wire:click="mostrarLista">Ver lista de usuarios</button>
    @else
        <livewire:list-user />
    @endif
    <div>
    <button wire:click="irALaLista">Ir a la lista</button>
    <div>
        <input id="user_1" wire:model="user_1" placeholder="Ingrese su nombre" name="user_1">
        <button type="submit" wire:click="textoEnviado()">enviar</button>
         <livewire:list-user :users="$users" />
         {{$formato}}
       
</div>
