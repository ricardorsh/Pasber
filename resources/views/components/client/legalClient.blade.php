<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <label for="legalname">Nombre de la Empresa</label>
            <input type="text" id="legalname" name="legalname" class="form-control" value="{{ old('legalname') }}" />
        </div>

        <div class="col-md-2 rigth">
            <label for="legalclient_id">Identificacion</label>
            <div class="input-group">
                <div class="col-md-2">
                    <span class="form-control">J</span>
                </div>
                <input type="number" id="legalclient_id" name="legalclient_id" class="form-control" value="{{ old('legalclient_id') }}" />
            </div>
        </div>
        <div class="col-md-2">
            <label for="legalemail">Correo electronico</label>
            <input type="legalemail" id="legalemail" name="legalemail" class="form-control" value="{{ old('legalemail') }}" />
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 rigth">
            <label for="legaldirection">Direccion</label>
            <textarea name="legaldirection" id="legaldirection" cols="30" rows="2" class="form-control">{{ old('legaldirection') }}</textarea>
        </div>
        <div class="col-md-2">
            <label for="legaltelf">Numero telefonico</label>
            <input type="number" id="legaltelf" name="legaltelf" class="form-control" value="{{ old('legaltelf') }}" />
        </div>

    </div>
    <hr/>
</div>
