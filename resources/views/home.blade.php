@extends('layouts.' .config('app.theme') . '.app')

@section('content')
@include('livewire.' .config('app.theme') . '.init')
{{-- <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <img src="{{ asset('imgs/Logo sisventas.png') }}" class="rounded-circle text-center" width="400px" height="400px" alt="SisVentas" />
            </div>
        </div>
    </div>
</div> --}}
@endsection
