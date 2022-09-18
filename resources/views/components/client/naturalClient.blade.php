<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" />
        </div>
        <div class="col-md-2 rigth">
            <label for="last_name">Apellidos</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" />
        </div>
        <div class="col-md-2 rigth">
            <label for="client_id">Identificacion</label>
            <input type="number" id="client_id" name="client_id" class="form-control" value="{{ old('client_id') }}" />
        </div>
        <div class="col-md-2">
            <label for="email">Correo electronico</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" />
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 rigth">
            <label for="direction">Direccion</label>
            <textarea name="direction" id="direction" cols="30" rows="2" class="form-control">{{ old('direction') }}</textarea>
        </div>
        <div class="col-md-2">
            <label for="telf">Numero telefonico</label>
            <input type="number" id="telf" name="telf" class="form-control" value="{{ old('telf') }}" />
        </div>

    </div>
    <hr/>
</div>
