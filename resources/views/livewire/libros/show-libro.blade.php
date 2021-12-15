<div>
    <div class="row">

        <div class="col-6 pr-0">
            <img class="d-block float-right" style="width:265px; height:405px"
                src="{{ Storage::disk('public')->url($libro->foto) }}" alt="">
        </div>

        <div class="col-6 pl-0">
            <div style="width:265px; height:405px; border:.5px solid #d1d1d1" class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion del Libro</h2>
                </div>
                <div class="card-header">
                </div>
                <div class="card-body">
                    <h1>{{ $libro->nombrel }}</h1>
                    {{ $libro->autor }} , {{ $libro->año }}
                    <h2 class="mt-5">{{ $libro->precio }}€</h2>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editLibros', $libro) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexLibros') }}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
