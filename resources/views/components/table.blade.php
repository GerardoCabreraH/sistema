@props(['title'])

<div class="table-responsive my-3">
    <table id="{{$title}}" class="table table-hover text-nowrap table-bordered">
        <thead>
            {{$header}}
        </thead>
        <tbody>
            {{$body}}
        </tbody>
    </table>
</div>
