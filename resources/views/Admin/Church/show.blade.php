@extends('Admin.layouts.page')

@section('title', 'Editar Casa de Oração')

@section('content_header')
    <h1>Editar Casa de Oração</h1>
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.church.index')}}" class="btn btn-info btn-sm mb-4"><i class="fas fa-undo-alt"></i> Voltar</a>
            </div>
        </div>
       
        <form action="{{route('admin.church.update', $church->id)}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="edit_code">Código</label>
                        <input type="text" name="code" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" id="edit_code" placeholder="Código" value="{{$church->code}}">        
                        
                        @if($errors->has('code'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('code') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="edit_church">Casa de Oração</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="edit_church" placeholder="Casa de oração: (Campos Elíseos)" value="{{$church->name}}">        
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="edit_city">Cidade</label>
                        <input type="text" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" id="edit_city" placeholder="Cidade: (Ribeirão Preto)" value="{{$church->city}}">        
                        @if($errors->has('city'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('city') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="edit_state">Estado</label>
                        <input type="text" name="state" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" id="edit_state" placeholder="Estado: (SP)" value="{{$church->state}}">        
                        @if($errors->has('state'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('state') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="edit_latitude">Latitude</label>
                        <input type="text" name="latitude" class="form-control" id="edit_latitude" placeholder="Latitude: (-21.1621768)" value="{{$church->latitude}}">        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="edit_longitude">Longitude</label>
                        <input type="text" name="longitude" class="form-control" id="edit_longitude" placeholder="Longitude: (-47.7989544)" value="{{$church->longitude}}">        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="edit_phone">Telefone</label>
                        <input type="text" name="phone" class="form-control" id="edit_phone" placeholder="Telefone: ((xx) xxxx-xxxx)" value="{{$church->phone}}">        
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <h4 class="bg-info p-2"> Informe os Dias de Culto</h4>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_sunday">Domingo</label>
                        <input type="text" name="sunday" class="form-control" id="edit_sunday" placeholder="99:99" value={{$church->daysWorship->sunday}}>        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_monday">Segunda-feira</label>
                        <input type="text" name="monday" class="form-control" id="edit_monday" placeholder="99:99" value="{{$church->daysWorship->monday}}">        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_tuesday">Terça-feira</label>
                        <input type="text" name="tuesday" class="form-control" id="edit_tuesday" placeholder="99:99" value="{{$church->daysWorship->tuesday}}">        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_wednesday">Quarta-feira</label>
                        <input type="text" name="Wednesday" class="form-control" id="edit_wednesday" placeholder="99:99" value={{$church->daysWorship->wednesday}}>        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_thursday">Quinta-feira</label>
                        <input type="text" name="thursday" class="form-control" id="edit_thursday" placeholder="99:99" value={{$church->daysWorship->thursday}}>        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_friday">Sexta-feira</label>
                        <input type="text" name="friday" class="form-control" id="edit_friday" placeholder="99:99" value="{{$church->daysWorship->friday}}">        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="edit_saturday">Sábado</label>
                        <input type="text" name="saturday" class="form-control" id="edit_saturday" placeholder="99:99" value="{{$church->daysWorship->saturday}}">        
                    </div>
                </div>
               
                <div class="col-3">
                    <label for="edit_day_young">Reunião de jovens</label>
                    <div class="form-group">
                        <input type="text" name="day_young" class="form-control" id="edit_day_young" placeholder="Dia / Horário" value="{{$church->daysWorship->youth_meeting}}">        
                    </div>
                
                </div>
                

                <div class="col-md-12">
                    <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Editar Casa de Oração</button>
                </div>
            </div>
        </form> 
      
    </div>
    
@stop



