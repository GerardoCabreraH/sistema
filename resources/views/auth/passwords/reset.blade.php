<x-adminlte title="AdminLTE 3 | Recover Password (v2)" style="login-page">
    <x-auth-box style="login" content="You are only one step a way from your new password, recover your password now">
        <x-form :route="route('password.email')">
            <x-hidden variable="token" :value="$request->route('token')" />
            <x-input-group icon="envelope">
                <x-input type="email" identifier="email" variable="email" placeholder="Email" autocomplete="email" :value="$request->email ?? old('email')" />
                <x-error-text variable="email" />
            </x-input-group>
            <x-input-group icon="lock">
                <x-password identifier="password" variable="password" placeholder="Password" autocomplete="new-password" error="@error('password') is-invalid @enderror" />
                <x-error-text variable="password" />
            </x-input-group>
            <x-input-group icon="lock">
                <x-confirm-password identifier="password-confirm" variable="password_confirmation" placeholder="Retype password" autocomplete="new-password" />
            </x-input-group>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <x-button type="submit" content="Change password" />
                </div>
                <!-- /.col -->
            </div>
        </x-form>
        <x-paragraph class="mt-3 mb-1">
            <x-hyperlink :route="route('login')" style="text-center">Login</x-hyperlink>
        </x-paragraph>
    </x-auth-box>
</x-adminlte>
