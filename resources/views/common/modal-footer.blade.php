            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="resetUI()" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Cerrar</button>

                @if ($selectedId < 1)
                    <button type="button" wire:click.prevent="store()" class="btn btn-outline-success close-modal" >GUARDAR</button>
                @else
                    <button type="button" wire:click.prevent="update()" class="btn btn-outline-success close-modal" >ACTUALIZAR</button>
                @endif
                
            </div>
        </div>
    </div>
</div>
