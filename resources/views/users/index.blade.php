<x-adminlte title="AdminLTE 3 | Lista de usuarios" style="sidebar-mini">
    <x-page-box size="container-fluid">
        <x-slot name="title">Gestion de usuarios</x-slot>
        <div class="row">
            <div class="col-lg-12">
                <x-card>
                    <x-slot name="header">
                        <h5 class="card-title">Lista de usuarios</h5>
                    </x-slot>
                    <x-slot name="body">
                        <x-hyperlink :route="route('users.create')" style="btn btn-success my-3">Crear</x-hyperlink>
                        <x-table title="users">
                            <x-slot name="header">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </x-slot>
                            <x-slot name="body">
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td data-label="Codigo">{{$usuario->code}}</td>
                                        <td data-label="Nombre">{{$usuario->name}}</td>
                                        <td data-label="Acciones" class="d-flex">
                                            <x-button-group :show="route('users.show', $usuario)" :edit="route('users.edit', $usuario)" :delete="route('users.destroy', $usuario)" />
                                        </td>
                                    </tr>
                                @endforeach
                            </x-slot>
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </x-page-box>
</x-adminlte>
