@extends('front.master.master')

@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-12">

                <h4>Componentes de alerta</h4>

                @component('front.components.alert', ['type' => 'success'])
                    [ Componente 1 ] - Primeiro alerta de erro.
                @endcomponent
                @component('front.components.alert', ['type' => 'danger'])
                    [ Componente 2 ] - Segundo alerta de erro.
                @endcomponent

                <hr>

                @alert(['type' => 'warning'])
                    [ Componente 3 ] - Terceiro alerta de erro com componente registrado em AppServiceProvider.
                @endalert
                @alert(['type' => 'info', 'datetime' => date('d/m/Y H:i:s')])
                    [ Componente 4 ] - Quarto alerta de erro com componente registrado em AppServiceProvider.
                @endalert
            </div>
        </div>

    </div>

@endsection


