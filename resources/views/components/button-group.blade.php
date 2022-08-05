@props(['show', 'edit', 'delete'])

<x-hyperlink route="{{$show}}" style="btn btn-primary ml-1">Ver</x-hyperlink>
<x-hyperlink route="{{$edit}}" style="btn btn-warning ml-1">Edit</x-hyperlink>
<x-form route="{{$delete}}" method="POST">
    @method('DELETE')
    <x-button class="btn btn-danger ml-1" content="Eliminar" />
</x-form>
