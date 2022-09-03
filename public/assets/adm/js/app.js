var product = $('#churches').DataTable({

    initComplete: function () {
        // Apply the search
        this.api()
        .columns()
        .every(function () {
            var that = this;
            $('input', this.footer()).on('keyup change clear', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

    },
    responsive: true,
    "autoWidth": false,
    'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
    }],

    "language": {
        "url": "./assets/adm/js/pt-BR.json"
    },

    "columns": [
        { "width": "28%" },
        { "width": "7%" },
        { "width": "7" },
        { "width": "28%" },
        { "width": "10%" },
        { "width": "18%" },
        { "width": "2%" },
    ]

});

product.on( 'draw', function () {
    $('.paginate_button.previous').html("<button class='btn btn-out btn-info btn-square'>Anterior</button>");
    $('.paginate_button.next').html("<button class='btn btn-out btn-info btn-square'>Próximo</button>");
} );