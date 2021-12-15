<div class="row">
    <div class="col-4 text-center">
        <div class="container">


            @if ($foto != null)
                <img style="width: 235px; height:335px " src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="width: 235px; height:335px "
                    src="{{ Storage::disk('public')->url($libro->foto != null ? $libro->foto : 'images/libros/default.png') }}"
                    alt="">


            @endif
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Subir Imagen</label>
                    <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                    @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </form>
        </div>
    </div>
    <div class="col-8 mx-auto">
        <div class="container">
            <div class="form-group">
                <label>Nombre</label>
                <input wire:model="libro.nombrel" type="text" class="form-control">
                @error('libro.nombrel') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Autor</label>
                <input wire:model="libro.autor" type="text" class="form-control">
                @error('libro.autor') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Año</label>
                <input wire:model="libro.año" type="number" class="form-control" maxlength="4">
                @error('libro.año') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Precio</label>
                <input wire:model="libro.precio" type="text" class="form-control">
                @error('libro.precio') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
</div>
