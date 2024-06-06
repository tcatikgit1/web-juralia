@extends('layouts/contentLayoutMaster')
@section('title', 'Juralia - política de privacidad')
@section('meta-seo')
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
@endsection

@section('meta-robots')
<meta name="robots" content="noindex">
@endsection

@section('style')

    <link rel="stylesheet" href="{{ asset(mix('css/bootstrap-lite.css'))  . '?v='.$VERSION_WEB }}" media="print" onload="this.media='all'; this.onload=null;"/>
    <link rel="stylesheet" href="{{ asset(mix('css/layout.css'))  . '?v='.$VERSION_WEB }}" />   <!-- ARREGLAR PROBLEMA FUENTES -->
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/app.css'))  . '?v='.$VERSION_WEB }}" />
@endsection
@section('content')
<div class="container">
    <div class="row mx-0">
        <div class="col-12 d-flex justify-content-center">
            <img class="m-1" src='{{asset('/images/logos/logo-juralia.png')}}' alt="logo juralia" style="max-height: 20rem; max-width: 80%;"/>
        </div>

        <h2 style="margin-bottom: 1rem; text-decoration: underline">Políticas de Cookies</h2>
        <p>Esta Política de Cookies es parte integrante del Aviso Legal y la Política de Privacidad de Juralia Las Palmas CIF 42852517K. El acceso y la navegación en el sitio, o el uso de los servicios del mismo, implican la aceptación de las Condiciones Generales establecidas en nuestro Aviso Legal (y por tanto de la Política de Privacidad y Política de Cookies). Por favor, léalas atentamente.</p>
        <p>Le agradecemos que haya decidido visitarnos. Queremos que su experiencia en el sitio sea lo mejor posible, y por ese motivo hemos escrito esta Política de Cookies de la forma más transparente posible.</p>
        <h3>¿Qué es una Cookie?</h3>
        <p>Las cookies son archivos que contienen pequeñas cantidades de información que se descargan en el dispositivo del usuario que se utiliza cuando visita un sitio web. Su finalidad principal es reconocer al usuario cada vez que accede a Juralia Las Palmas y nos permite, además, mejorar la calidad y la usabilidad de nuestra web.</p>
        <p>Las cookies son esenciales para el funcionamiento de Internet; no pueden dañar el equipo/dispositivo del usuario y, si se encuentran activadas en la configuración de su navegador, nos ayudan a identificar y resolver posibles errores de funcionamiento de https://www.juralia.es/.</p>
        <h3>Tipos de Cookies</h3>
        <p>Hay diferentes tipos de cookies. Todas ellos trabajan de la misma manera, pero tienen pequeñas diferencias:</p>
        <p>a) <b>Cookies de Sesión</b>. Las cookies de sesión perduran solamente por la duración de su visita y se borran cuando se cierra el navegador. Su finalidad principal es identificar el tipo de dispositivo, apoyar la seguridad del sitio web o su funcionalidad básica. No contienen información personal que nos permita identificar a una persona.</p>
        <p>b) <b>Cookies Persistentes o Permanentes</b>: Se almacenan en el disco duro del dispositivo y nuestra web las lee cada vez que se realiza una nueva visita a https://www.juralia.es/; posee una fecha de caducidad o expiración determinada, cumplida la cual la cookie deja de funcionar. Nos permiten identificar sus acciones y preferencias; analizar las visitas y nos ayudan a comprender cómo llegan los usuarios a nuestra página y mejorar nuestros servicios.</p>
        <p>c) <b>Cookies de Funcionalidad</b>: Permiten a https://www.juralia.es/ recordar decisiones adoptadas por el usuario, como su login o identificador.</p>
        <p>La información que estas cookies recogen se anonimiza (es decir, no contiene ni su nombre, dirección, u otros datos).</p>
        <p>d) <b>Cookies de Terceros</b>. Las cookies de terceros son las cookies que instala un sitio web que no es el que está visitando; por ejemplo, las usadas por redes sociales (como Facebook) o por complementos externos de contenido (como Google Maps). Además, algunas empresas de publicidad usan este tipo de archivos para realizar un seguimiento de sus visitas en cada sitio en el que se anuncian.</p>
        <p>e) <b>Cookies Analíticas</b>: Son cookies que tienen por finalidad el mantenimiento periódico y garantizar el mejor funcionamiento y servicio al usuario; recopilando datos de su actividad.</p>
        <h3>Uso de Cookies por parte de: juralia.es</h3>
        <p>Mediante el acceso a https://www.juralia.es/, acepta de manera expresa que podamos usar este tipo de cookies en sus dispositivos. Si desactiva las cookies, puede que su navegación por https://www.juralia.es/ no sea óptima y algunas de las utilidades que dispone https://www.juralia.es/ no funcionen correctamente.</p>
        <h3>a) Cookies propias</h3>
        <p>Con el fin de reconocerte y prestarte un mejor servicio, nuestro sitio utiliza cookies (pequeños archivos de texto que tu navegador almacena) propias. Las ventajas que conlleva la aceptación de nuestras cookies se traduce en un ahorro de tiempo. Asimismo pueden ser utilizadas también para reconocerte entre visitas sucesivas y así adaptar el contenido que se te muestra, para obtener información acerca de la fecha y hora de tu última visita, medir algunos parámetros de tráfico dentro del propio sitio, y estimar el número de visitas realizadas, de manera que podamos enfocar y ajustar los servicios y promociones de forma más efectiva.</p>
        <p>Ninguna cookie permite que pueda contactarse con tu número de teléfono, tu dirección de correo electrónico o con cualquier otro medio de contacto. Ninguna cookie puede extraer información de tu disco duro o robar información personal.</p>

        <table class="cookiesPropias">
            <tbody><tr>
                <th>Cookie</th>
                <th>Fecha de caducidad</th>
                <th>Función</th>
            </tr>
            <tr>
                <td>laravel_session</td>
                <td>Cookie de sesión</td>
                <td>Cookie propia </td>
            </tr>
            <tr>
                <td>XSRF-TOKEN</td>
                <td>Cookie de sesión</td>
                <td>Cookie propia para gestionar la sesión de cada usuario.</td>
            </tr>
            </tbody></table>

        <h3>b) Cookies de Terceros. Cookies de Google Analytics</h3>
        <p>El sitio utiliza el servicio Google Analytics, que es prestado por Google, Inc., entidad cuya oficina principal está en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos ("Google").</p>
        <p>Google Analytics utiliza cookies para ayudarnos a analizar el uso que hacen los usuarios del sitio. La información que genera la cookie acerca del uso del sitio (incluyendo su dirección IP) será directamente transmitida y archivada por Google en sus servidores de Estados Unidos. Google usará esta información por cuenta nuestra con el propósito de seguir la pista de su uso del sitio, recopilando informes de la actividad del sitio y prestando otros servicios relacionados con la actividad del sitio y el uso de Internet. Google podrá transmitir dicha información a terceros cuando así se lo requiera la legislación, o cuando dichos terceros procesen la información por cuenta de Google. Google no asociará tu dirección IP con ningún otro dato del que disponga Google.</p>
        <p>Si lo desea puede rechazar el tratamiento de los datos o la información rechazando el uso de cookies mediante la selección de la configuración apropiada de su navegador. Sin embargo, si lo hace, puede ser que no puedas usar la plena funcionabilidad de este sitio. Al utilizar este sitio consiente en el tratamiento de su información por Google en la forma y para los fines arriba indicados.</p>

        <table class="cookiesTerceros">
            <tbody><tr>
                <th>Cookie</th>
                <th>Propietario</th>
                <th>Fecha de caducidad</th>
                <th>Función</th>
            </tr>
            <tr>
                <td>_ga</td>
                <td>Google</td>
                <td>2 años</td>
                <td>Se usa para distinguir a los usuarios.</td>
            </tr>
            <tr>
                <td>_gid</td>
                <td>Google</td>
                <td>24 horas</td>
                <td>Se usa para distinguir a los usuarios.</td>
            </tr>
            <tr>
                <td>_gat</td>
                <td>Google</td>
                <td>1 minuto</td>
                <td>Se usa para limitar el porcentaje de solicitudes. Si se ha implementado Google Analytics mediante Google Tag Manager</td>
            </tr>
            </tbody></table>

        <h3>Configuración del usuario para evitar Cookies.</h3>
        <p>Desde https://www.juralia.es/ y en cumplimiento de la normativa legal vigente, ponemos a su disposición la información que le permita configurar su navegador/navegadores de Internet para mantener su privacidad y seguridad en relación a las cookies. Por ello, le facilitamos la información y enlaces a los sitos de soporte oficiales de los principales navegadores para que pueda decidir si desea o no aceptar el uso de cookies.</p>
        <p>Así, puede bloquear las cookies a través de las herramientas de configuración del navegador o bien puede configurar su navegador para que le avise cuando un servidor quiera guardar una cookie:</p>
        <p>a)  Si utiliza Microsoft Internet Explorer, en la opción de menú Herramientas &gt; Opciones de Internet &gt; Privacidad &gt; Configuración. Para saber más visite
            <a href="http://windows.microsoft.com/es-es/windows-vista/block-or-allow-cookies" target="_blank" rel="noreferrer">http://windows.microsoft.com/es-es/windows-vista/block-or-allow-cookies</a> y
            <a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9" target="_blank" rel="noreferrer">http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9.</a></p>
        <p>b)  Si utiliza Firefox, en la opción de menú Herramientas &gt; Opciones &gt; Privacidad &gt; Cookies. Para saber más visite
            <a href="http://support.mozilla.org/es/products/firefox/cookies." target="_blank" rel="noreferrer">http://support.mozilla.org/es/products/firefox/cookies.</a></p>
        <p>c)  Si utiliza Chrome, en la sección de Opciones &gt; Opciones avanzadas &gt; Privacidad. Para saber más <a href="http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647" target="_blank" rel="noreferrer">http://support.google.com/chrome/bin/answer.py?hl=es&amp;answer=95647</a></p>
        <p>d)  Si utiliza Opera, en la opción de Seguridad y Privacidad, podrá configurar el navegador. Para saber más visite
            <a href="http://www.opera.com/help/tutorials/security/cookies/" target="_blank" rel="noreferrer">http://www.opera.com/help/tutorials/security/cookies/</a></p>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset(mix('js/layout.js'))  . '?v='.$VERSION_WEB }}"></script>
@endsection

