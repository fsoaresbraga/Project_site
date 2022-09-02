@extends('Admin.layouts.page')

@section('title', 'grupo -  Tech Week')

@section('content_header')
    <h1>Grupo</h1>
@stop

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <a href="{{route('admin.feira')}}" class="btn btn-sm btn-primary">Voltar</a>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <h4 class="mb-4">Participantes</h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Nome Participante</th>
                        <th scope="col">Área de Atuação</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($grupo->participantes as $participante)
                            <tr>
                                <th>{{$participante->nome}}</th>
                                <th>{{$participante->email}}</th>
                                <td>{{$participante->departamento}}</td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <hr />
            </div>

            <div class="form-group col-md-12">
                <label for="nome_grupo">Nome Grupo</label>
                <input type="text" id="nome_grupo" class="form-control" disabled value="{{$grupo->nome}}">
            </div>
            <div class="form-group col-md-12">
                <label for="desc_grupo">Descrição Grupo</label>
                <textarea cols="10"  rows="8" id="desc_grupo" class="form-control" disabled>{{$grupo->descricao}}</textarea>
            </div>

            
        </div>
    </div>  
   
@stop



