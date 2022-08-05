jQuery.fn.extend({
    table: function(name) {
        return $(name).DataTable({
            "language": {
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Sin resultados",
                "search": "Buscar",
                "paginate": {
                    "next": "Sig.",
                    "previous": "Ant."
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colección",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %d filas al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "1": "Mostrar 1 fila",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
            },
            "dom": "Brtip",
            "pageLength": 5,
            "responsive": false, "lengthChange": false, "autoWidth": false, "info": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"],
        }).buttons().container().appendTo(name + ' .col-md-6:eq(0)');
    }
});

$(function () {
    $.fn.table("#users");
});
