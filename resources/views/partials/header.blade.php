@php
    $textos_barra = ['DIVORCIO', 'GUARDA Y CUSTODIA DE HIJOS MENORES', 'CONVENIO REGULADOR', 'MODIFICACIÓN DE MEDIDAS', 'CUSTODIA COMPARTIDA', 'INCAPACIDAD Y TUTELA'];
@endphp

<section id="header">
    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
    <div class="header-content">     <!-- Solucionar la doble animación con AOS.init({once: 'true'}) -->
        <div class="header-velo"></div>
        <img src="{{asset('/images/logos/logo-juralia.png')}}" alt="juralia logo">
        <h2>
            <span class="text-content-title text-content-title1">TU DEFENSA,</span><br>
            <span class="text-content-title text-content-title2">NUESTRA PASIÓN</span>
        </h2>
        <h3 class="text-content-subtitle">Despacho de abogados especializado en Derecho de Familia</h3>
    </div>
    <div class="d-none header-ico-1 header-ico-2 header-ico-3 header-ico-4 header-ico-5 header-ico-6"></div>
    <div class="header-bottom row" style="margin: 0">
        @foreach ($textos_barra as $key => $value)
            <div class="header-bottom-item col-4 col-md-2">
                <div class="header-ico header-ico-{{$key + 1}}"></div>
                <p>{{$value}}</p>
            </div>
        @endforeach
    </div>
</section>

@if(\Illuminate\Support\Facades\Session::has('correo-enviado'))
    <script>
        var myToast = Toastify({
            text:  "{{\Illuminate\Support\Facades\Session::get('correo-enviado')}}",
            duration: 5000
        })
        myToast.showToast();
    </script>
@endif

@if(\Illuminate\Support\Facades\Session::has('correo-no-enviado'))
    <script>
        var myToast = Toastify({
            text:  "{{\Illuminate\Support\Facades\Session::get('correo-no-enviado')}}",
            duration: 5000
        })
        myToast.showToast();
    </script>
@endif


@if(isset($errores))
    @foreach ($errores as $error)
        <script>
            var myToast = Toastify({
                text:  "{{$error[0]}}",
                duration: 5000
            })
            myToast.showToast();
        </script>
    @endforeach
@endif
