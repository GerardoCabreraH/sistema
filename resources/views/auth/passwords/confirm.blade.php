<x-adminlte title="AdminLTE 3 | Confirm Password" style="login-page">
    <x-auth-box style="login" content="Please confirm your password before continuing">
        <x-form :route="route('password.confirm')">
            <x-input-group icon="lock">
                <x-password identifier="password" variable="password" placeholder="Password" autocomplete="current-password" />
                <x-error-text variable="password" />
            </x-input-group>
            <div class="row">
                <div class="col-12">
                    <x-button type="submit" content="Confirm Password" />
                </div>
                <!-- /.col -->
            </div>
        </x-form>
        <x-paragraph>
            @if (Route::has('password.request'))
                <x-hyperlink :route="route('password.request')" style="text-center">I forgot my password</x-hyperlink>
            @endif
        </x-paragraph>
    </x-auth-box>
</x-adminlte>
