<x-adminlte title="AdminLTE 3 | Log in (v2)" style="login-page">
    <x-auth-box style="login" content="Sign in to start your session">
        <x-form :route="route('login')">
            <x-input-group icon="envelope">
                <x-input type="email" identifier="email" variable="email" placeholder="Email" autocomplete="email" :value="old('email')" />
                <x-error-text variable="email" />
            </x-input-group>
            <x-input-group icon="lock">
                <x-password identifier="password" variable="password" placeholder="Password" autocomplete="current-password" />
                <x-error-text variable="password" />
            </x-input-group>
            <div class="row">
                <div class="col-8">
                    <x-checkbox identifier="remember" variable="remember" :value="old('remember') ? 'checked' : ''" content="Remember Me" />
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <x-button type="submit" content="Sign In" />
                </div>
                <!-- /.col -->
            </div>
        </x-form>
        <x-paragraph large="1">
            @if (Route::has('password.request'))
                <x-hyperlink :route="route('password.request')" style="text-center">I forgot my password</x-hyperlink>
            @endif
        </x-paragraph>
        <x-paragraph>
            <x-hyperlink :route="route('register')" style="text-center">Register a new membership</x-hyperlink>
        </x-paragraph>
    </x-auth-box>
</x-adminlte>
