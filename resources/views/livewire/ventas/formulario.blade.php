<div class="row">
    <div class="col-6 mx-auto">
        <form>
            <div class="form-group">
                <div class="form-group">
                    <label>Seleccionar Usuario</label>
                    <select wire:model="venta.id_usuario" class="form-control">
                        <option selected value="">---------</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }}</option>
                        @endforeach

                    </select>
                    @error('venta.id_usuario') <p>Favor de Seleccionar un Usuario.</p>@enderror
                </div>
                <div class="form-group">
                    <label>Seleccionar Libro</label>

                    <select wire:model="venta.id_libro" class="form-control">
                        <option selected value="">---------</option>
                        @foreach ($libros as $libro)
                            <option value="{{ $libro->id }}">{{ $libro->nombrel }}</option>
                        @endforeach

                    </select>
                    @error('venta.id_libro') <p>Favor de Seleccionar una Bicicleta.</p>@enderror
                </div>
        </form>
    </div>
</div>
