<div>

<div>
    <input wire:model.debounce.300ms="search" type="text" placeholder="Buscar...">
    <h2>Lista de Usuarios</h2>
    <table >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>Juan Pérez</td><td>juan@example.com</td></tr>
            <tr><td>María López</td><td>maria@example.com</td></tr>
            <tr><td>Carlos Ruiz</td><td>carlos@example.com</td></tr>
        </tbody>
    </table>


    <div>
    <input wire:model="search" type="text" placeholder="Buscar por nombre..." class="form-control mb-2">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['role'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No hay resultados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

    <button wire:click="$emitUp('volverAUsers')">Volver</button>
    <ul>
        @foreach($users as $user)
            <li>
                @if(isset($user['route']))
                    <a href="{{ $user['route'] }}">{{ $user['name'] }}</a>
                @else
                    {{ $user['name'] }}
                @endif
            </li>
        @endforeach
    </ul>

</div>
<script>
    window.addEventListener('no-result-found', event => {
    Swal.fire({
        icon: 'error',
        title: 'Sin resultados',
        text: 'No se encontraron coincidencias con tu búsqueda.',
        confirmButtonColor: '#d33',
    }).then(() => {
        // Redirige a la raíz, cambia la URL si quieres otra ruta
        //window.location.href = '/';
        Swal.fire({
            icon: 'success',
            title: '¡Listo!',
            text: 'Búsqueda realizada correctamente.',
            timer: 1500,
            showConfirmButton: false,
            timerProgressBar: true,
        });
    });
   
});
</script>
</div>