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
    <section id="politicas">
        <div class="container">
            <div class="col-12 d-flex justify-content-center">
                <img class="m-1" src='{{asset('/images/logos/logo-juralia.png')}}' alt="logo juralia" style="max-height: 20rem; max-width: 80%;"/>
            </div>

            <div class="contenido row col-12 mx-0 px-0 justify-content-center">
                <div class="container">
                    <h2 style="margin-bottom: 1rem; text-decoration: underline">Políticas de Privacidad</h2>
                    <p>
                        La Política de Privacidad forma parte de las Condiciones Generales que rigen la presente Web.
                    </p>
                    <h2>¿Quién es el responsable del tratamiento de sus datos?</h2>
                    <ul>
                        <li>Juralia Las Palmas</li>
                        <li>CIF: 42852517K</li>
                        <li>Calle Sao Paulo, 17</li>
                        <li>Las Palmas de Gran Canaria (35008)</li>
                        <li>Tlfno: 664 39 41 75</li>
                        <li>Mail: beatriz@juralia.es y info@juralia.es</li>
                    </ul>
                    <p>Puede dirigirse de cualquier forma para comunicarse con nosotros.</p>
                    <p>Nos reservamos el derecho a modificar o adaptar la presente Política de Privacidad en cualquier momento. Le recomendamos revisar la misma, y si se ha registrado y accede a su cuenta o perfil, se le informará de las modificaciones.</p>
                    <p>Si pertenece a alguno de los siguientes colectivos, consulte la información desplegable:</p>

                    <h2>1. CONTACTOS DE LA WEB O DEL CORREO ELECTRÓNICO</h2>
                    <h3>¿Qué datos recopilamos a través de la Web?</h3>
                    <p>Podemos tratar su IP, qué sistema operativo o navegador usa, e incluso la duración de su visita, de forma anónima.</p>
                    <p>Si nos facilita datos en el formulario de contacto, se identificará para poder contactar con usted en caso de que sea necesario.</p>

                    <h3>¿Con que finalidades vamos a tratar sus datos personales?</h3>
                    <ul>
                        <li>Contestar a sus consultas, solicitudes o peticiones.</li>
                        <li>Gestionar el servicio solicitado, contestar su solicitud, o tramitar su petición.</li>
                        <li>Información por medios electrónicos, que versen sobre su solicitud.</li>
                        <li>Información comercial o de eventos por medios electrónicos, siempre que exista autorización expresa.</li>
                        <li>Realizar análisis y mejoras en la Web, sobre nuestros productos y servicios. Mejorar nuestra estrategia comercial.</li>
                    </ul>

                    <h3>¿Cuál es la legitimación para el tratamiento de sus datos?</h3>
                    <p>La aceptación y consentimiento del interesado: En aquellos casos donde para realizar una solicitud sea necesario cumplimentar un formulario y hacer un "click" en el botón de enviar, la realización del mismo implicará necesariamente que ha sido informado y ha otorgado expresamente su consentimiento al contenido de la cláusula anexada a dicho formulario o aceptación de la política de privacidad.
                        Todos nuestros formularios cuentan con el símbolo * en los datos obligatorios. Si no facilita esos campos, o no marca el checkbox de aceptación de la política de privacidad, no se permitirá el envío de la información. Normalmente tiene la siguiente fórmula: “□ He leído y acepto la Política de privacidad.”</p>

                    <h2>2. CLIENTES</h2>
                    <h3>¿Con que finalidades vamos a tratar sus datos personales?</h3>
                    <ul>
                        <li>Elaboración del presupuesto y seguimiento del mismo mediante comunicaciones entre ambas partes.</li>
                        <li>Información por medios electrónicos, que versen sobre su solicitud.</li>
                        <li>Información comercial o de eventos por medios electrónicos, siempre que exista autorización expresa.</li>
                        <li>Gestionar los servicios administrativos, de comunicaciones y de logística realizados por el Responsable.</li>
                        <li>Facturación y declaración de los impuestos oportunos.</li>
                        <li>Realizar las transacciones que correspondan.</li>
                        <li>Gestiones de control y recobro.</li>
                    </ul>

                    <h2>3. PROVEDORES</h2>
                    <h3>¿Con que finalidades vamos a tratar sus datos personales?</h3>
                    <ul>
                        <li>Información por medios electrónicos, que versen sobre su solicitud.</li>
                        <li>Información comercial o de eventos por medios electrónicos, siempre que exista autorización expresa.</li>
                        <li>Gestionar los servicios administrativos, de comunicaciones y de logística realizados por el Responsable.</li>
                        <li>Facturación.</li>
                        <li>Realizar las transacciones que correspondan.</li>
                        <li>Facturación y declaración de los impuestos oportunos.</li>
                        <li>Gestiones de control y recobro.</li>
                    </ul>

                    <h3>¿Cuál es la legitimación para el tratamiento de sus datos?</h3>
                    <p>La base legal es la aceptación de una relación contractual, o en su defecto su consentimiento al contactar con nosotros u ofrecernos sus productos por alguna vía.</p>

                    <h2>4. CONTACTOS REDES SOCIALES</h2>
                    <h3>¿Con que finalidades vamos a tratar sus datos personales?</h3>
                    <ul>
                        <li>Contestar a sus consultas, solicitudes o peticiones.</li>
                        <li>Gestionar el servicio solicitado, contestar su solicitud, o tramitar su petición.</li>
                        <li>Relacionarnos con usted y crear una comunidad de seguidores.</li>
                    </ul>

                    <h3>¿Cuál es la legitimación para el tratamiento de sus datos?</h3>
                    <p>La aceptación de una relación contractual en el entorno de la red social que corresponda, y conforme a sus políticas de Privacidad:</p>
                    <ul>
                        <li>Facebook <a href="http://www.facebook.com/policy.php?ref=pf" target="_blank" rel="noreferrer">http://www.facebook.com/policy.php?ref=pf</a></li>
                        <li>Twitter  <a href="http://twitter.com/privacy" target="_blank" rel="noreferrer">http://twitter.com/privacy</a></li>
                        <li>Linkedin <a href="hhttp://www.linkedin.com/legal/privacy-policy?trk=hb_ft_priv" target="_blank" rel="noreferrer">http://www.linkedin.com/legal/privacy-policy?trk=hb_ft_priv</a></li>
                    </ul>

                    <h3>¿Durante cuánto tiempo vamos a mantener los datos personales?</h3>
                    <p>Sólo podemos consultar o dar de baja sus datos de forma restringida al tener un perfil específico. Los trataremos tanto tiempo como usted nos lo permita siguiéndonos, siendo amigos o dándole a “me gusta”, “seguir” o botones similares.</p>
                    <p>Cualquier rectificación de sus datos o restricción de información o de publicaciones debe realizarla a través de la configuración de su perfil o usuario en la propia red social.</p>

                    <h2>5. DEMANDANTES DE EMPLEO</h2>
                    <h3>¿Con que finalidades vamos a tratar sus datos personales?</h3>
                    <ul>
                        <li>Organización de procesos de selección para la contratación de empleados.</li>
                        <li>Citarle para entrevistas de trabajo y evaluar su candidatura.</li>
                        <li>Si nos has dado su consentimiento, se lo podremos ceder a empresas colaboradoras o afines, con el único objetivo de ayudarle a encontrar empleo.</li>
                    </ul>
                    <h3>¿Durante cuánto tiempo vamos a mantener los datos personales?</h3>
                    <p>Asimismo, le comunicamos que transcurrido un año desde la recepción de su currículum vitae, procederemos a su destrucción segura.</p>
                    <h3>¿Cuál es la legitimación para el tratamiento de sus datos?</h3>
                    <p>La base legal es su consentimiento inequívoco, al enviarnos su CV.</p>
                    <h3>¿Incluimos datos personales de terceras personas?</h3>
                    <p>No, como norma general sólo tratamos los datos que nos facilitan los titulares. Si nos aporta datos de terceros deberá, con carácter previo, informar y solicitar su consentimiento a dichas personas, o de lo contrario nos exime de cualquier responsabilidad por el incumplimiento de este requisito.</p>
                    <h3>¿Y datos de menores?</h3>
                    <p>No tratamos datos de menores de 14 años sin consentimiento del padre, madre o tutor legal. Por tanto, absténgase de facilitarlos si no tiene esa edad o, en su caso, de facilitar datos de terceros que no tengan la citada edad. DISTRIBUIDORA ELECTRICA CANARIA, S.A. se exime de cualquier responsabilidad por el incumplimiento de esta previsión.</p>
                    <h3>¿Realizaremos comunicaciones por medios electrónicos?</h3>
                    <p>Solo se realizarán para gestionar su solicitud, si es uno de los medios de contacto que nos ha facilitado.</p>
                    <p>Si realizamos comunicaciones comerciales habrán sido previa y expresamente autorizadas por usted.</p>
                    <h3>¿Qué medidas de seguridad aplicamos?</h3>
                    <p>Puede estar tranquilo: Hemos adoptado un nivel óptimo de protección de los Datos Personales que manejamos, y hemos instalado todos los medios y medidas técnicas a nuestra disposición según el estado de la tecnología para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los Datos Personales.</p>

                    <h3>¿A qué destinatarios se comunicarán sus datos?</h3>
                    <p>Sus datos no se cederán a terceros, salvo obligación legal. En concreto se comunicarán a la Agencia Estatal de la Administración Tributaria y a bancos y entidades financieras para el cobro del servicio prestado o producto adquirido, como a los encargados del tratamiento necesarios para la ejecución del acuerdo.</p>
                    <p>En caso de compra o pago, si elige alguna aplicación, web, plataforma, tarjeta bancaria, o algún otro servicio online, sus datos se cederán a esa plataforma o se tratarán en su entorno, siempre con la máxima seguridad.</p>
                    <p>Cuando se lo ordenemos, tendrán acceso a nuestra web la empresa de desarrollo y mantenimiento web, o la de hosting. Las mismas tendrán firmado un contrato de prestación de servicios que les obliga a mantener el mismo nivel de privacidad que nosotros.</p>
                    <p>Cualquier transferencia internacional de datos al usar aplicaciones americanas, estará adherida al convenio Privacy Shield, que garantiza que las empresas de software americano cumplen las políticas de protección de datos europeas en materia de privacidad.</p>

                    <h3>¿Qué Derechos tiene?</h3>
                    <ul>
                        <li>A saber si estamos tratando sus datos o no.</li>
                        <li>A acceder a sus datos personales.</li>
                        <li>A solicitar la rectificación de sus datos si son inexactos.</li>
                        <li>A solicitar la supresión de sus datos si ya no son necesarios para los fines para los que fueron recogidos o si nos retira el consentimiento otorgado.</li>
                        <li>A solicitar la limitación del tratamiento de sus datos, en algunos supuestos, en cuyo caso solo los conservaremos de acuerdo con la normativa vigente.</li>
                        <li>A portar sus datos, que le serán facilitados en un formato estructurado, de uso común o lectura mecánica. Si lo prefiere, se los podemos enviar al nuevo responsable que nos designe. Sólo es válido en determinados supuestos.</li>
                        <li>A presentar una reclamación ante la Agencia Española de Protección de Datos o autoridad de control competente, si cree que no le hemos atendido correctamente.</li>
                        <li>A revocar el consentimiento para cualquier tratamiento para el que haya consentido, en cualquier momento.</li>
                    </ul>

                    <p>Si modifica algún dato, le agradecemos que nos lo comunique para mantenerlos actualizados.</p>
                    <h3>¿Quiere un formulario para el ejercicio de Derechos?</h3>
                    <p>Tenemos formularios para el ejercicio de sus derechos, pídanoslos por email, o si lo prefiere, puede usar los elaborados por la Agencia Española de Protección de Datos o terceros.</p>
                    <p>Estos formularios deben ir firmados electrónicamente o ser acompañados de fotocopia del DNI. Si le representa alguien, debe adjuntarnos copia de su DNI, o también firmado con su firma electrónica.</p>
                    <p>Los formularios pueden ser presentados presencialmente, enviados por carta o por mail en la dirección del Responsable al inicio de este texto.</p>
                    <h3>¿Cuánto tardamos en contestarle al Ejercicio de Derechos?</h3>
                    <p>Depende del derecho, pero como máximo en un mes desde su solicitud, y dos meses si el tema es muy complejo. Le notificaremos si necesitamos más tiempo.</p>
                    <h3>¿Tratamos cookies?</h3>
                    <p>Si usamos otro tipo de cookies que no sean las necesarias, podrá consultar la política de cookies en el enlace correspondiente desde el inicio de nuestra web.</p>
                    <h3>¿Durante cuánto tiempo vamos a mantener sus datos personales?</h3>
                    <p>Los datos personales serán mantenidos mientras siga vinculado con nosotros. Una vez se desvincule, los datos personales tratados en cada finalidad se mantendrán durante los plazos legalmente previstos, incluido el plazo en el que un juez o tribunal los pueda requerir atendiendo al plazo de prescripción de acciones judiciales.</p>
                    <p>Los datos tratados se mantendrán en tanto no expiren los plazos legales aludidos anteriormente, si hubiera obligación legal de mantenimiento, o de no existir ese plazo legal, hasta que el interesado solicite su supresión o revoque el consentimiento otorgado.</p>
                    <p>Mantendremos toda la información y comunicaciones relativas a su compra o a la prestación de nuestro servicio, mientras duren las garantías de los productos o servicios, para atender posibles reclamaciones.</p>
                    <p></p>


                </div>
                {{-- <div class="row col-12"></div>

                <footer id="footer">

                    <div class="fondo">
                        <img src="/images/lemontik-fondo-footer.png" width="100%" alt="">
                    </div>

                    <div class="row mx-auto justify-content-center col-12 col-xl-6">

                        <div class="enlaces d-flex flex-column align-items-center col-12 col-md-4">
                            <a href="/privacy">Política de privacidad</a>
                            <a href="/cookies">Política de cookies</a>
                        </div>

                        <div class="logotipo d-flex flex-column align-items-center justify-content-center col-12 col-md-4">
                            <img src="/images/lemontik-logo-xs.png" width="200px" height="45px" alt="Lemontik - Logotipo" style="margin-top: 3rem; margin-bottom: 1rem;">
                            <div>
                                <a class="mx-2" href="https://www.instagram.com/lemon.tik/" target="_blank" rel="noreferrer">
                                    <img src="/images/instagram.png" width="30px" alt="">
                                </a>
                                <a class="mx-2" href="https://www.facebook.com/Lemontik-106821497708295/" target="_blank" rel="noreferrer">
                                    <img src="/images/facebook.png" width="30px" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="enlaces d-flex flex-column align-items-center col-12 col-md-4">
                            <a href="#footer">Trabaja con nosotros</a>
                        </div>

                    </div>

                    <div class="powered mx-auto text-center">
                        Powered by 2021 © <a href="https://tcatik.com" target="_blank" rel="noreferrer">Tca-tik</a>. All rights reserved.
                    </div>

                </footer> --}}

            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset(mix('js/layout.js'))  . '?v='.$VERSION_WEB }}"></script>
@endsection

