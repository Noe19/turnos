<div>
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

    <button wire:click="$emitUp('volverAUsers')">Volver</button>
</div>