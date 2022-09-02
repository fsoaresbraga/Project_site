@extends('Admin.layouts.page')

@section('title', 'Feira de ideias -  Tech Week')

@section('content_header')
    <h1>Feira de ideias</h1>
@stop

@section('content')
    <div class="container">
        <div id="feira"></div>
    </div>
    <link href="{{asset('libs/adm/css/tabulator/tabulator.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/adm/css/tabulator/tabulator_bootstrap4.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('libs/adm/js/tabulator/tabulator.min.js')}}"></script>
    <script>
     
        var table = new Tabulator("#feira", {
            layout:"fitColumns",
            ajaxURL:"/admin/feiraAll",
            ajaxProgressiveLoad:"scroll",
            responsiveLayout : "hide" ,
            placeholder:"Nenhuma grupo encontrado...",
            columns:[
                {
                    title:"Nome Grupo", 
                    field:"nome", 
                    sorter:"string"
                },

                {
                    title:"Breve Descrição", 
                    field:"descricao", 
                    sorter:"date", 
                    sorter:"string"
                },
                
                {
                    title:"Ações", 
                    formatter:function(cell, formatterParams)
                    {
                        return `
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/admin/feira/${cell._cell.row.data.id}/edit" class="btn btn-sm btn-success"><i class="far fa-eye"></i> </a>
                            </div>
                        </div>
                        `
                    },
                    width:100,
                    hozAlign:"center"
                }
            ],
        });
    </script>
@stop



