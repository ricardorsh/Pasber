@vite(['resources/js/client.js'])
<x-layout
:metaDescription="''"
title="Creando cliente"
>
    <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-2">
                <label for="typeClient">Tipo de cliente</label>
                <select name="typeClient" id="typeClient" class="form-select" aria-label="Default select example">
                    <option value="0">Natural</option>
                    <option value="1">Juridico</option>
                </select>
            </div>
        </div>
        <div id="contentNaturalClient">
            <x-client.naturalClient></x-client.naturalClient>
        </div>
        <div id="contentLegalClient" style="display:none">
            <x-client.legalClient></x-client.legalClient>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Crear Cliente</button>

    </form>
</x-layout>


