<x-adminlte title="AdminLTE 3 | Modificar usuario" style="sidebar-mini">
    <x-page-box size="container-fluid">
        <x-slot name="title">Gestion de usuarios</x-slot>
        <div class="row">
            <div class="col-lg-12">
                <x-card>
                    <x-slot name="header">
                        <h5 class="card-title">Modificar usuario {{$usuario->code}}</h5>
                    </x-slot>
                    <x-slot name="body">
                        <x-hyperlink :route="route('users.index')" style="btn btn-success my-3">Volver</x-hyperlink>
                        <x-form :route="route('users.update', $usuario)">
                            @method('PUT')
                            <x-form-group title="name" content="Full Name">
                                <x-input identifier="name" variable="name" placeholder="Full Name" autocomplete="name"
                                    :value="old('name', $usuario->name)" />
                                <x-error-text variable="name" />
                            </x-form-group>
                            <x-form-group title="email" content="Email">
                                <x-input type="email" identifier="email" variable="email" placeholder="Email"
                                    autocomplete="email" :value="old('email', $usuario->email)" />
                                <x-error-text variable="email" />
                            </x-form-group>
                            <x-form-group title="role" content="Role">
                                <x-select identifier="role" variable="role" :value="old('role', $usuario->role)" title="Seleccionar rol del sistema">
                                    <option {{ old('role', $usuario->role)=="Administrador" ? 'selected' :''}} value="Administrador">Administrador</option>
                                    <option {{ old('role', $usuario->role)=="Usuario" ? 'selected' :''}} value="Usuario">Usuario</option>
                                </x-select>
                                <x-error-text variable="role" />
                            </x-form-group>
                            <x-form-group title="password" content="Password">
                                <x-password identifier="password" variable="password" placeholder="Password"
                                    autocomplete="new-password" error="@error('password') is-invalid @enderror" />
                                <x-error-text variable="password" />
                            </x-form-group>
                            <x-form-group title="password-confirm" content="Retype password">
                                <x-confirm-password identifier="password-confirm" variable="password_confirmation"
                                    placeholder="Retype password" autocomplete="new-password" />
                            </x-form-group>
                            <div class="row">
                                <div class="col-12">
                                    <x-button type="submit" content="Update" />
                                </div>
                                <!-- /.col -->
                            </div>
                        </x-form>
                    </x-slot>
                </x-card>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </x-page-box>
</x-adminlte>
