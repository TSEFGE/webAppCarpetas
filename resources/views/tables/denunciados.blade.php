<h6>Denunciados</h6>
<div class="table">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
        </thead>
        <tbody>
            @if(count($denunciados)==0)
                <tr><td colspan="5" class="text-center">Sin registros</td></tr>
            @else
                @foreach($denunciados as $denunciado)
                    <tr>
                        <td>{{ $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp }}</td>
                        <td>{{ $denunciado->rfc }}</td>
                        <td>{{ $denunciado->edad }}</td>
                        <td>{{ $denunciado->sexo }}</td>
                        <td>{{ $denunciado->telefono }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>