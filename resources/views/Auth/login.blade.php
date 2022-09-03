@extends('Admin.layouts.login')
@section('content')
<div class="login-page">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <img src="{{ asset('assets/adm/images/logo.png') }}" style="width:160px" class="image-responsive"/>
        </div>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">Faça login para iniciar sua sessão</p>

        <form action="{{route('login.authenticate')}}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="email" name="email" 
                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                placeholder="Email" value="{{old('email')}}">
            
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>
            
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Senha">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
            </div>
            <div class="row mb-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Logar</button>
            </div>
            </div>
        </form>
        <?php
        /*
        <p class="mb-1">
            <a href="#">Esqueci a minha senha</a>
        </p>
        */
        ?>
        </div>
    </div>     

</div>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
  @stop