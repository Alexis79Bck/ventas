<div class="modal fade" tabindex="-1" wire:ignore.self id="modal{{$componentName}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header {{config('app.theme') == 'matrix-theme' ? 'bg-primary text-white': ''}}">
                <h5 class="modal-title {{config('app.theme') == 'cork-theme' ? 'text-white': ''}}">
                    <span>{{ $componentName }}</span> | {{ $selectedId > 0 ? 'EDITAR' : 'NUEVO' }}
                </h5>
                <h6 class="text-center text-warning" wire:loading> ... Espere un momento ...</h6>

            </div>
            <div class="modal-body">
