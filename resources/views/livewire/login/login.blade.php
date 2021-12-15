<div class="row">
    <div class="col-6 mx-auto">
    <form wire:submit.prevent="login">
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input wire:model="email" autocomplete="off" type="email" class="form-control"
                placeholder="example@gmail.com">
            @error('email') <b class="text-danger">{{ $message }}</b> @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input autocomplete="off" wire:model="password" type="password" class="form-control"
                placeholder="*********">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
            @error('password') <b class="text-danger">{{ $message }}</b> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{route('createUsuarios')}}" class="btn btn-secondary">Registrar</a>
    </form>
</div>
</div>
