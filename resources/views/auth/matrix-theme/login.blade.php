@extends('layouts.' .config('app.theme') . '.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">

            <div class="mt-n3 card shadow border border-dark" >
                <div class="card-header h4 text-light text-center bg-dark" >{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-3"   id="loginform">
                        @csrf

                        <div class="row mb-3">
                            <div class="input-group mb-3" >
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" ><i class="fas fa-user-alt    "></i></span>
                                </div>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror  form-control-lg"  placeholder="Username"" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus style="border: 1px solid #2f3e96">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="input-group mb-3" >
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100"  id="basic-addon"><i class="fas fa-lock    "></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg"    placeholder="Password" name="password" required autocomplete="current-password" style="border: 1px solid #2f3e96">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0 mx-auto">

                            <button type="submit" class="btn btn-dark">
                                <span class="h4 fs-4">{{ __('Entrar') }}</span>
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu password?') }}
                                </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
