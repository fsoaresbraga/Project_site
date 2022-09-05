@extends('Admin.layouts.page')

@section('title', 'Dashboard - Site')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <div class="row">
      <div class="col-lg-6 col-6">
         <!-- small box -->
         <div class="small-box bg-info">
            <div class="inner">
               <h3>{{$count_church}}</h3>
               <p>Casas de Oração</p>
            </div>
            <div class="icon">
               <i class="fas fa-building"></i>
            </div>
            <a href="{{route('admin.church.index')}}" class="small-box-footer">Cadastrar Casa de Oração <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
         <!-- small box -->
         <div class="small-box bg-success">
            <div class="inner">
               <h3>0</h3>
               <p>usuários</p>
            </div>
            <div class="icon">
               <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Cadastro de Usuário <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>

   </div>
@stop



