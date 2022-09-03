@extends('Admin.layouts.page')

@section('title', 'Casas de Oração')

@section('content_header')
    <h1>Nova Casa de Oração</h1>
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.church.index')}}" class="btn btn-info btn-sm mb-4"><i class="fas fa-undo-alt"></i> Voltar</a>
            </div>
        </div>
       
        <form action="{{route('admin.church.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="new_code">Código</label>
                        <input type="text" name="code" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" id="new_code" placeholder="Código" value="{{old('code')}}">        
                        
                        @if($errors->has('code'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('code') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="new_church">Casa de Oração</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="new_church" placeholder="Casa de oração: (Campos Elíseos)" value="{{old('name')}}">        
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="new_city">Cidade</label>
                        <input type="text" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" id="new_city" placeholder="Cidade: (Ribeirão Preto)" value="{{old('city')}}">        
                        @if($errors->has('city'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('city') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="new_state">Estado</label>
                        <input type="text" name="state" class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" id="new_state" placeholder="Estado: (SP)" value="{{old('state')}}">        
                        @if($errors->has('state'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('state') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="new_latitude">Latitude</label>
                        <input type="text" name="latitude" class="form-control" id="new_latitude" placeholder="Latitude: (-21.1621768)" value="{{old('latitude')}}">        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="new_longitude">Longitude</label>
                        <input type="text" name="longitude" class="form-control" id="new_longitude" placeholder="Longitude: (-47.7989544)" value="{{old('longitude')}}">        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="new_phone">Telefone</label>
                        <input type="text" name="phone" class="form-control" id="new_phone" placeholder="Telefone: ((xx) xxxx-xxxx)" value="{{old('phone')}}">        
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <h4 class="bg-info p-2"> Informe os Dias de Culto</h4>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_sunday">Domingo</label>
                        <input type="text" name="sunday" class="form-control" id="new_sunday" placeholder="99:99" value={{old('sunday')}}>        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_monday">Segunda-feira</label>
                        <input type="text" name="monday" class="form-control" id="new_monday" placeholder="99:99" value="{{old('monday')}}">        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_tuesday">Terça-feira</label>
                        <input type="text" name="tuesday" class="form-control" id="new_tuesday" placeholder="99:99" value="{{old('tuesday')}}">        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_wednesday">Quarta-feira</label>
                        <input type="text" name="Wednesday" class="form-control" id="new_wednesday" placeholder="99:99" value={{old('wednesday')}}>        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_thursday">Quinta-feira</label>
                        <input type="text" name="thursday" class="form-control" id="new_thursday" placeholder="99:99" value={{old('thursday')}}>        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_friday">Sexta-feira</label>
                        <input type="text" name="friday" class="form-control" id="new_friday" placeholder="99:99" value="{{old('friaday')}}">        
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="new_saturday">Sábado</label>
                        <input type="text" name="saturday" class="form-control" id="new_saturday" placeholder="99:99" value="{{old('saturday')}}">        
                    </div>
                </div>
               
                <div class="col-3">
                    <label for="new_monday">Reunião de jovens</label>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" name="day_young" class="form-control" placeholder="Dia" value="{{old('day_young')}}">        
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="hour_young" class="form-control" placeholder="Horário" value="{{old('hour_young')}}">        
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                

                <div class="col-md-12">
                    <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Criar Casa de Oração</button>
                </div>
            </div>
        </form> 
      
    </div>
    
@stop



