@props(['size' => 'container'])

<div class="wrapper">
    <x-header />
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="{{$size}}">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">{{$title}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.{{$size}} -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="{{$size}}">
                <x-alert :type="session('status')" :content="session('status')" />
                {{$slot}}
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-control-sidebar />
    <x-footer />
</div>
<!-- ./wrapper -->
