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
               <h3>{{$feira}}</h3>
               <p>Feira de Ideias</p>
            </div>
            <div class="icon">
               <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Incrições feira de ideias <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
         <!-- small box -->
         <div class="small-box bg-success">
            <div class="inner">
               <h3>0</h3>
               <p>ideathon</p>
            </div>
            <div class="icon">
               <i class="fas fa-brain"></i>
            </div>
            <a href="#" class="small-box-footer">Incrições ideathon <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>

   </div>
@stop



