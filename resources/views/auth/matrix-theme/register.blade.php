@extends('layouts.' . config('app.theme') . '.app')

@section('content')
<div class=" container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card border border-dark shadow" >
                <div class="card-header text-light text-center bg-dark h4" >{{ __('Nuevo Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-1">
                            <div class="input-group ">
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" ><i class="fas fa-user-edit    "></i></span>
                                </div>

                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name" style="border: 1px solid #2f3e96" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="input-group ">
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" ><i class="fas fa-phone  "></i></span>
                                </div>

                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone" style="border: 1px solid #2f3e96">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="input-group">
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" ><i class="fas fa-user    "></i></span>
                                </div>

                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username" style="border: 1px solid #2f3e96">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="input-group ">
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" > <i class="fas fa-envelope    "></i> </span>
                                </div>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail" style="border: 1px solid #2f3e96">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="input-group ">
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" > <i class="fas fa-envelope    "></i> </span>
                                </div>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" style="border: 1px solid #2f3e96">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="input-group ">
                                <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                    <span  class="input-group-text bg-dark text-white h-100" id="basic-addon1" > <i class="fas fa-lock    "></i> </span>
                                </div>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="border: 1px solid #2f3e96">
                            </div>
                        </div>

                        <div class="row mb-0 mx-auto">

                                <button type="submit" class="btn btn-dark">
                                    {{ __('Registrar') }}
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
