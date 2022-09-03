@extends('Admin.layouts.page')

@section('title', 'Casas de Oração')

@section('content_header')
    <h1>Casas de Oração</h1>
@stop

@section('content')
    <a href="{{route('admin.church.create')}}" class="btn btn-info btn-sm mb-4"><i class="nav-icon fas fa-building"></i> Nova Casa de Oração</a>
    <div class="container">
        
        <table id="churches" class="table table-responsive table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="input-search">Casa de Oração</th>
                    <th class="nosort">Latitude</th>
                    <th class="nosort">Longitude</th>
                    <th class="nosort">Dias de Culto</th>
                    <th class="nosort">Status</th>
                    <th>Data de Alteração</th>
                    <th>Opção</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($churches as $church)
                    <tr>
                        <td>{{$church->name}}</td>
                        <td>{{$church->latitude}}</td>
                        <td>{{$church->longitude}}</td>
                        <td>  
                            <ul>   
                               
                              
                                {!!
                                    $church->daysWorship ->monday != null ?  '<li>Doningo: '.$church->daysWorship ->monday.'</li>' : ''
                                !!}

                                {!!
                                    $church->daysWorship ->Sunday != null ?  '<li>Segunda: '.$church->daysWorship ->Sunday.'</li>' : ''
                                !!}

                                {!!
                                    $church->daysWorship->tuesday  != null ?  '<li>Terça: '.$church->daysWorship->tuesday.'</li>' : ''
                                !!}

                                {!!
                                    $church->daysWorship->wednesday  != null ?  '<li>Quarta: '.$church->daysWorship->wednesday.'</li>' : ''
                                !!}
                         
                                {!!
                                    $church->daysWorship->thursday  != null ?  '<li>Quinta: '.$church->daysWorship->thursday.'</li>' : ''
                                !!}
                         
                                {!!
                                    $church->daysWorship->friday  != null ?  '<li>Sexta: '.$church->daysWorship->friday.'</li>' : ''
                                !!}
                         
                                {!!
                                    $church->daysWorship->saturday  != null ?  '<li>Sábado: '.$church->daysWorship->saturday.'</li>' : ''
                                !!}

                                {!!
                                    $church->daysWorship->youth_meeting  != null ?  '<li>RDJ: '.$church->daysWorship->youth_meeting.'</li>' : ''
                                !!}
                         
                            </ul>
                        </td>
                        <td>
                            <span class="badge {{$church->status == 1 ? "badge-secondary" : "badge-danger"}}">
                                {{$church->status == 1 ? "Ativa" : "Desativada"}}
                            </span>
                            
                        </td>
                        <td>{{\Carbon\Carbon::parse($church->updated_at)->format('d/m/Y H:i')}}</td>
                        <td>
                            <a href="#" class="btn btn-outline-secondary btn-icon-text"> <i class="fas fa-edit"></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="input-search">Casa de Oração</th>
                    <th class="nosort">Latitude</th>
                    <th class="nosort">Longitude</th>
                    <th class="nosort">Dias de Culto</th>
                    <th class="nosort">Status</th>
                    <th>Data de Alteração</th>
                    <th>Opção</th>
                </tr>
            </tfoot>
        </table>
    </div>
    
@stop



