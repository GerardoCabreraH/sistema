<x-adminlte title="AdminLTE 3 | Recover Password (v2)" style="login-page">
    <x-auth-box style="login" content="You forgot your password? Here you can easily retrieve a new password">
        <x-alert :type="session('status')" :content="session('status')" />
        <x-form :route="route('password.email')">
            <x-input-group icon="envelope">
                <x-input type="email" identifier="email" variable="email" placeholder="Email" autocomplete="email" :value="old('email')" />
                <x-error-text variable="email" />
            </x-input-group>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <x-button type="submit" content="Request new password" />
                </div>
                <!-- /.col -->
            </div>
        </x-form>
        <x-paragraph class="mt-3 mb-1">
            <x-hyperlink :route="route('login')" style="text-center">Login</x-hyperlink>
        </x-paragraph>
    </x-auth-box>
</x-adminlte>
