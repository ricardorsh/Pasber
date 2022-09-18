<x-layout
:metaDescription="''"
title="Usuario"
>

    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Crear Usuario</a><br><br>
    <table class="table table-striped table-dark" id="dataTable">
        <thead>
        <tr>
            <th scope="col">Identificacion</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Accion</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user -> id }}</th>
                <td>{{ $user -> name }} {{ $user -> last_name }}</td>
                <td>{{ $user -> telf }}</td>
                <td>{{ $user -> email }}</td>
                <td>
                <a class="" href="{{ route('user.edit', $user -> id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                    </svg>
                </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
