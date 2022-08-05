<x-adminlte title="AdminLTE 3 | Registration Page (v2)" style="register-page">
    <x-auth-box style="register" content="Register a new membership">
        <x-form :route="route('register')">
            <x-input-group icon="user">
                <x-input identifier="name" variable="name" placeholder="Full Name" autocomplete="name" :value="old('name')" />
                <x-error-text variable="name" />
            </x-input-group>
            <x-input-group icon="envelope">
                <x-input type="email" identifier="email" variable="email" placeholder="Email" autocomplete="email" :value="old('email')" />
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
                <div class="col-12">
                    <x-button type="submit" content="Register" />
                </div>
                <!-- /.col -->
            </div>
        </x-form>
        <x-hyperlink :route="route('login')" style="text-center">I already have a membership</x-hyperlink>
    </x-auth-box>
</x-adminlte>
