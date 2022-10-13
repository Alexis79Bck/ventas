<div>
    <div class="row sales layout-top-spacing ">

        <div class="col-sm-12  ">

            <div class="widget-heading d-flex no-block align-items-center ">

                <div class="card-title  w-75">
                <span class="h4 fw-bolder"> {{$componentName}} </span> | <span class="h5 fw-bold fst-italic text-primary"> {{$pageTitle}}</span>
                </div>
                <div class="w-100 ">

                    <a href="javascript:void(0)" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal{{$componentName}}"><i class="fas fa-plus    "></i> Agregar</a>

                </div>

            </div>
            @include('common.searchbox')

        </div>

        <div class="table-responsive shadow">
            <table class="table table-bordered   ">
                <thead class="text-white" style="background: #2f3e96">
                    <tr>
                        <th class="table-th text-white">DESCRIPCION</th>
                        <th class="table-th text-white">IMAGEN</th>
                        <th class="table-th text-white text-center" colspan="2"> - </th>

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
                    <tr >
                        <td colspan="4"><span class="h5"> No existe registro.</span></td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
            {{$categories->links()}}
        </div>
        @include('livewire.cork-theme.category.form')
    </div>

<script >
    document.addEventListener('DOMContentLoaded', function()  {
        window.livewire.on('show-modal', msg => {
            console.log(msg)
            $('#modal' + msg).modal('show')
        })
        window.livewire.on('hide-modal', msg => {
            $('#modal' + msg[0]).modal('hide')
            Swal.mixin({
                        toast: true,
                        customClass: {
                            poppup: 'colored-toast'
                        },
                        position: 'top-right',
                        showConfirmButton: false,
                        timer: 4500,
                        
                        timerProgressBar: true
                    }).fire({
                        icon: 'success',
                        title: msg[1]
                        
                    })
        })
        
        window.livewire.on('cancel', msg => {
            $('#theModal').modal('hide')
        })
    });
    function Confirm(id)
    {
        // if(products > 0)
        // {
        //     Swal.fire('No se puede eliminar esta categoria por que tiene productos asignados')
        //     return
        // }
        Swal.fire({
            title: 'Confirmar Eliminar Registro',
            text: "¿Estas seguro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3B3F5C',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('deleteRow', id)
                    Swal.mixin({
                        toast: true,
                        position: 'top-right',   
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true
                    }).fire({
                        icon: 'success',
                        title: 'Categoria eliminada.'
                    }) 
                }
        });
    }
</script>

</div>