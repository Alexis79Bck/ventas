<div>
    <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <span class="card-title ">
                <span class="h3 fw-bolder"> {{$componentName}} </span> | <span class="h4  fst-italic text-primary"> {{$pageTitle}}</span>
            </span>
            <div class="ms-auto text-end">

                <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{$componentName}}"><i class="fas fa-plus"></i>  Agregar</a>

            </div>

        </div>
        </div>
        @include('common.searchbox')
    </div>

    <div class="container-fluid">
        <div class="table-responsive shadow">
            <table class="table table-bordered border-primary  ">
                <thead class="text-dark text-center bg-primary bg-gradient" >
                    <tr>
                        <th scope="col"><span class="h5 text-light fw-bold">DESCRIPCION  </span></th>
                        <th scope="col"><span class="h5 text-light fw-bold">IMAGEN</span></th>
                        <th colspan="2" scope="col"><span class="h5 text-light fw-bold"> - </span></th>
                    </tr>
                </thead>
                <tbody >
                    @forelse ($categories as $category)
                    <tr id="row-{{$category->id}} ">
                        <td><span class="h5">{{ $category->name }}</span></td>
                        <td class="text-center">
                            <span>
                                <img src="{{ asset('storage/categories/' . $category->image) }}" alt="img de ejemplo" height="65" width="75" >
                            </span>
                        </td>
                        <td class="text-center">
                            <a href="javascript:void(0)" wire:click="edit({{ $category->id }})" class="btn btn-info mtmobile" role="button" title="Editar">
                                <i class="fas fa-edit    "></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:void(0)" onclick="Confirm('{{ $category->id }}')" class="btn btn-danger mtmobile" role="button" title="Eliminar">

                                <i class="fas fa-trash-alt    "></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4"><span class="h5"> No existe registro.</span></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
        @include('livewire.matrix-theme.category.form')
    </div>
</div>
<script >
    document.addEventListener('DOMContentLoaded', function()  {
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show')
        })
        window.livewire.on('cateory-added', msg => {
            $('#theModal').modal('hide')
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: msg,
                showConfirmButton: false,
                timer: 2000
            })
        })
        window.livewire.on('category-updated', msg => {
            $('#theModal').modal('hide')
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: msg,
                showConfirmButton: false,
                timer: 2000
            })
        })
        window.livewire.on('cancel', msg => {
            $('#theModal').modal('hide')
        })
    });
    function Confirm(id, products)
    {
        if(products > 0)
        {
            Swal.fire('No se puede eliminar esta categoria por que tiene productos asignados')
            return
        }
        Swal.fire({
            title: 'Confirmar',
            text: "¿Estas seguro de eliminar el registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3B3F5C',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Aceptar'
            }).then((result) => {
            if (result.isConfirmed) {
                window.livewire.emit('deleteRow', id)
                Swal.fire(
                'Eliminado!',
                'Categoria eliminada.',
                'success'
                )
            }
        });
    };
</script>

