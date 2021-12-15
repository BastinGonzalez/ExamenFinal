<div>
    <form wire:submit.prevent="create">
        <div class="card">
            <div class="card-header">
                Nuevo Libro
            </div>
            <div class="card-body">
                @include('livewire.libros.formulario');
            </div>
            <div class="card-footer text-center">
                <button wire:click="create" type="submit" class="btn btn-success">Crear</button>
                <a href="{{ route('indexLibros') }}" class="btn btn-danger">Regresar</a>
            </div>
        </div>




    </form>

</div>
