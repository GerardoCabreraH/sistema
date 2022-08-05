@props(['style', 'content'])

<div class="{{$style}}-box">
    <!-- /.{{$style}}-logo -->
    <x-card>
        <x-slot name="header">
            <x-hyperlink :route="route('index')" style="h1"><b>Admin</b>LTE</x-hyperlink>
        </x-slot>
        <x-slot name="body">
            <x-paragraph class="login-box-msg">{{$content}}</x-paragraph>
            {{$slot}}
        </x-slot>
    </x-card>
</div>
<!-- /.{{$style}}-box -->
