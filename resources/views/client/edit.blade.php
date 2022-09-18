@vite(['resources/js/clientdate.js'])
<x-layout>
    <form action="{{ route('client.update', $client->id) }}" method="post">
        @csrf
        <input type="hidden" name="typeClient" value="{{ $client->type_client }}">
        @if ($client->type_client == 0)
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $client->name }}" />
                </div>
                <div class="col-md-2 rigth">
                    <label for="last_name">Apellidos</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $client->last_name }}" />
                </div>
                <div class="col-md-2 rigth">
                    <label for="client_id">Identificacion</label>
                    <input type="number" id="client_id" class="form-control" value="{{ $client->personal_identify }}" readonly />
                </div>
                <div class="col-md-2">
                    <label for="email">Correo electronico</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $client->email }}" />
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 rigth">
                    <label for="direction">Direccion</label>
                    <textarea name="direction" id="direction" cols="30" rows="2" class="form-control" >{{ $client->direction }}</textarea>
                </div>
                <div class="col-md-2">
                    <label for="telf">Numero telefonico</label>
                    <input type="number" id="telf" name="telf" class="form-control" value="{{ $client->telf }}" />
                </div>

            </div>
            <hr/>
        </div>
        @else
        <div class="form-group">
            <input type="hidden" name="typeClient" value="{{ $client->type_client }}">
            <div class="row">
                <div class="col-md-2">
                    <label for="legalname">Nombre de la Empresa</label>
                    <input type="text" id="legalname" name="legalname" class="form-control" value="{{ $client->name }}" />
                </div>
                <div class="col-md-2 rigth">
                    <label for="legalclient_id">Identificacion</label>
                    <div class="input-group">
                        <div class="col-md-2">
                            <span class="form-control">J</span>
                        </div>
                        <input type="number" id="legalclient_id" class="form-control" value="{{ $client->personal_identify }}" />
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="legalemail">Correo electronico</label>
                    <input type="legalemail" id="legalemail" name="legalemail" class="form-control" value="{{ $client->email }}" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 rigth">
                    <label for="legaldirection">Direccion</label>
                    <textarea name="legaldirection" id="legaldirection" cols="30" rows="2" class="form-control">{{ $client->direction }}</textarea>
                </div>
                <div class="col-md-2">
                    <label for="legaltelf">Numero telefonico</label>
                    <input type="number" id="legaltelf" name="legaltelf" class="form-control" value="{{ $client->telf }}" />
                </div>
            </div>
            <hr/>
        </div>
        @endif
        <button type="submit" class="btn btn-primary btn-sm">Actualizar Cliente</button>

    </form>

</x-layout>
