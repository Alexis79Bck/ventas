@include('common.modal-header')

<div class="row">
    <div class="col-sm-12 mb-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-edit"></i>
                </span>
            </div>
            <input type="text" class="form-control" wire:model.lazy="name" placeholder="Ej.: Cursos">
        </div>
        @error('name')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-sm-12 mb-3">
        <div class="form-group custom-file">
            <input type="file" class="custom-file-input form-control" wire:model="image" accept="image/x-png,image/gif,image/jpeg, ">
            <label class="custom-file-label">Imágen: {{$image}}</label>
            @error('image')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>




@include('common.modal-footer')
