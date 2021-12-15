<div>
    <div class="row ">
        <div class="col-6 mx-auto text-center">
            <div class=" card">

                <div class="card-header">
                    <img style="width:165px; height:165" src="{{ Storage::disk('public')->url($libro->foto) }}"
                        alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $libro->nombrel }}</h1>
                    {{ $libro->autor }} {{ $libro->año }}
                </div>
                <div class="card-footer">
                    <button wire:click="delete" type="submit" class="btn btn-danger">Eliminar</button>
                    <a href="{{ route('indexLibros') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
