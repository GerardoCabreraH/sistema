<x-adminlte title="AdminLTE 3 | Informacion del usuario" style="sidebar-mini">
    <x-page-box size="container-fluid">
        <x-slot name="title">Gestion de usuarios</x-slot>
        <div class="row">
            <div class="col-lg-12">
                <x-card>
                    <x-slot name="header">
                        <h5 class="card-title">Informacion del usuario {{$usuario->code}}</h5>
                    </x-slot>
                    <x-slot name="body">
                        <x-hyperlink :route="route('users.index')" style="btn btn-success my-3">Volver</x-hyperlink>
                        <x-info-group title="Codigo" :content="$usuario->code" />
                        <x-info-group title="Nombre" :content="$usuario->name" />
                        <x-info-group title="Email" :content="$usuario->email" />
                        <x-info-group title="Rol" :content="$usuario->role" />
                        <x-info-group title="Fecha de creación" :content="$usuario->created_at" />
                    </x-slot>
                </x-card>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </x-page-box>
</x-adminlte>
