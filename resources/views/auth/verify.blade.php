<x-adminlte title="AdminLTE 3 | Verify Email" style="login-page">
    <x-auth-box style="login" content="Verify Your Email Address">
        <x-alert :type="session('resent')" content="A fresh verification link has been sent to your email address"></x-alert>
        <x-paragraph class="text-center">Before proceeding, please check your email for a verification link.</x-paragraph>
        <x-paragraph class="text-center">If you did not receive the email,</x-paragraph>
        <x-form :route="route('verification.resend')">
            <div class="row">
                <div class="col-12">
                    <x-button type="submit" content="Click here to request another" />
                </div>
                <!-- /.col -->
            </div>
        </x-form>
    </x-auth-box>
</x-adminlte>
