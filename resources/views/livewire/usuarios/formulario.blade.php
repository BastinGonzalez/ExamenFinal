<div class="row">
    <div class="col-4 text-center">
        <div class="container">


            @if ($foto != null)
                <img style="width: 235px; height:335px " src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="width: 235px; height:335px "
                    src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/default.png') }}"
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
                <input wire:model="usuario.nombre_usuario" type="text" class="form-control">
                @error('usuario.nombre_usuario') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Correo</label>
                <input wire:model="usuario.email" type="text" class="form-control">
                @error('usuario.email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input autocomplete="new-password" wire:model="password" type="password" class="form-control" maxlength="20">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Confirmar Contraseña</label>
                <input wire:model="confirm_password" type="password" class="form-control" maxlength="20">
                @error('confirm_password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
</div>
