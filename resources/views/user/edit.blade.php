<x-layout>
    <form action="{{ route('user.update', $users)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $users->name }}"/>
                </div>
                <div class="col-md-2">
                    <label for="last_name">Apellidos</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $users->last_name }}"/>
                </div>
                <div class="col-md-2">
                    <label for="user_id">Identificacion</label>
                    <input type="text" id="user_id" name="user_id" class="form-control" value="{{ $users->user_id }}"/>
                </div>
                <div class="col-md-2">
                    <label for="email">Correo electronico</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $users->email }}"/>
                </div>
                <div class="col-md-2">
                    <label for="telf">Numero telefonico</label>
                    <input type="number" id="telf" name="telf" class="form-control" value="{{ $users->telf }}"/>
                </div>
            </div>
            <br>
            <div class="row">
                <!--
                    <div class="col-md-2">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control"/>
                    </div>
                    <div class="col-md-2">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"/>
                    </div>
                -->
                <div class="col-md-4">
                    <label for="direction">Direccion</label>
                    <textarea name="direction" id="direction" cols="30" rows="2" class="form-control">{{ $users->direction }}</textarea>
                </div>

            </div>
            <hr/>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Actualizar Usuario</button>

    </form>

</x-layout>
