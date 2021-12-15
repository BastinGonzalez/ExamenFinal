<div>
    <div class="row ">
        <div class="col-6 mx-auto text-center">
            <div class=" card">

                <div class="card-header">
                    ¿DESEAS CONTINUAR?
                </div>
                <div class="card-footer">
                    <button wire:click="delete" type="submit" class="btn btn-danger">Eliminar</button>
                    <a href="{{ route('indexVentas') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
