<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro - Portada</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header img {
            max-width: 200px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #444;
            overflow: hidden;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 30px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
        }
        /* Estilo para las imágenes */
        img {
            max-width: 400px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
        }
        /* Ajustes para el contenido de las noticias */
        .noticia {
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .noticia img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }
        .noticia h3 {
            margin-bottom: 5px;
        }
        .noticia h3 a {
            color: #333;
            text-decoration: none;
        }
        .noticia h3 a:hover {
            text-decoration: underline;
        }
        /* Estilo para el botón de desplegar el menú */
        #btn-noticias-ultima-hora {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #666;
            border-radius: 5px;
            padding: 10px;
            color: #fff;
            border: none;
            cursor: pointer;
            z-index: 999;
        }
        /* Estilo para el contenedor de las noticias de última hora */
        #noticias-container {
            position: fixed;
            top: 70px;
            right: 20px;
            background-color: #444;
            border-radius: 5px;
            padding: 10px;
            max-width: 300px; /* Ancho máximo del contenedor */
            z-index: 998;
            display: none;
        }
        /* Estilo para cada noticia de última hora */
        .noticia-ultima-hora {
            display: block;
            margin-bottom: 5px;
            color: #fff;
            text-decoration: none;
        }
        /* Estilo para el footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        /* Estilo para la sección de avisos */
        #avisos {
            background-color: #FFD700; /* Color de fondo amarillo */
            color: #333; /* Texto oscuro */
            padding: 10px 20px; /* Espaciado interno */
            text-align: center;
        }
        /* Estilo para el enlace en la sección de avisos */
        #avisos a {
            color: #333; /* Texto oscuro */
            text-decoration: underline; /* Subrayado del enlace */
        }
    </style>
    <!-- Enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header class="bg-dark text-light py-4">
    <!-- Contenido del encabezado aquí -->
    <div class="container">
        <div id="avisos">
            <p><strong>Aviso:</strong> ¡Tenemos una promoción especial este fin de semana! Visita <a href="https://www.solotodo.cl/" target="_blank" class="text-light">www.solotodo.cl</a> para más detalles.</p>
            <p>¿No tienes una cuenta? <a href="registro.php" class="text-light">Regístrate aquí</a></p>
            <p>¿Ya tienes una cuenta? <a href="login.php" class="text-light">Inicia sesión aquí</a></p>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="m-0">El Faro - Portada</h1>
            <?php
            if (isset($_SESSION['nombre_usuario'])) {
                echo '<div class="dropdown">';
                echo '<a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">' . $_SESSION['nombre_usuario'] . '</a>';
                echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                echo '<li><form action="logout.php" method="post" class="dropdown-item"><button type="submit" class="btn btn-link text-danger">Cerrar sesión</button></form></li>';
                echo '</ul>';
                echo '</div>';
            } else {
                echo '<a href="login.php" class="btn btn-outline-light">Iniciar sesión</a>';
            }
            ?>
        </div>
    </div>
</header>
<main>
    <!-- Contenido principal aquí -->
</main>
<footer class="bg-dark text-light py-4">
    <!-- Contenido del pie de página aquí -->
</footer>
</body>
</html>

    <!-- Contenedor principal de Bootstrap -->
    <div class="container-fluid">
        <!-- Portada -->
        <header class="bg-dark text-light p-4">
            <h1>El Faro</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg_fC5m4VxB7aHW9FTdJ8f0RQFCyWgp85OLchPUJcAlg&s" alt="Logotipo El Faro">
        </header>

        <!-- Menú -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#deporte">Deporte</a></li>
                    <li class="nav-item"><a class="nav-link" href="#juegos">Juegos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#peliculas">Películas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#clima">Clima</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Botón para desplegar el menú de Noticias de Última Hora -->
    <button id="btn-noticias-ultima-hora" onclick="toggleNoticiasUltimaHora()">Noticias de Última Hora</button>

    <!-- Contenedor de las noticias de última hora -->
    <div id="noticias-container">
        <a href="https://www.emol.com/noticias/Nacional/2024/04/27/1129221/carabineros-oposicion-yanez-permanencia-toha.html" class="noticia-ultima-hora">Tragedia en Carabineros</a>
        <a href="https://www.emol.com/noticias/Nacional/2024/04/27/1129223/gobierno-toque-queda-triple-asesinato.html" class="noticia-ultima-hora">Gobierno decreta toque de queda</a>
        <a href="https://www.emol.com/noticias/Nacional/2024/04/27/1129216/carabineros-canete-llamado-amenazas-asesinato.html" class="noticia-ultima-hora">Nos echamos a tres pacos</a>
        <a href="https://www.emol.com/noticias/Nacional/2024/04/27/1129222/muestras-apoyo-carabineros-triple-crimen.html" class="noticia-ultima-hora">Velatones</a>
        <a href="https://www.emol.com/noticias/Tendencias/2024/04/25/1128983/mujer-miss-universo-argentina.html" class="noticia-ultima-hora">Periodista y abogada que a los 60 años va por el título Miss Universo Argentina</a>
    </div>

    <!-- Contenido de la página -->
    <main>
        <!-- Aquí va el contenido de tu página -->
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2024 El Faro - Todos los derechos reservados</p>
    </footer>

    <!-- Enlaces a los archivos JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-SCnYwSlkjvSAIwU4Oysxe4vhAy3rQYQHQ/B1MbDp6K7pQHxGsWblqHGyz0ENYV6k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pjDoaRmmBDesp5MXPcUj3/GFhR1iPaqdEzJYKlG9tzzpSZm6p/mhXQffJvzJISrh" crossorigin="anonymous"></script>

    <script>
        // Función para alternar la visibilidad del contenedor de Noticias de Última Hora
        function toggleNoticiasUltimaHora() {
            var noticiasContainer = document.getElementById("noticias-container");
            if (noticiasContainer.style.display === "none" || noticiasContainer.style.display === "") {
                noticiasContainer.style.display = "block";
            } else {
                noticiasContainer.style.display = "none";
            }
        }

        // Función para redireccionar a la página de la noticia seleccionada
        function openNewsPage(newsId) {
            // Aquí puedes redireccionar a la página deseada según la noticia seleccionada
            // Por ejemplo, puedes usar un switch para redireccionar a diferentes páginas según el ID de la noticia
            switch (newsId) {
                case 'noticia1':
                    window.location.href = 'pagina_noticia_1.html';
                    break;
                case 'noticia2':
                    window.location.href = 'pagina_noticia_2.html';
                    break;
                case 'noticia3':
                    window.location.href = 'pagina_noticia_3.html';
                    break;
                case 'noticia4':
                    window.location.href = 'pagina_noticia_4.html';
                    break;
                case 'noticia5':
                    window.location.href = 'pagina_noticia_5.html';
                    break;
                default:
                    break;
            }
        }
    </script>
</body>
</html>

    <main>
        <!-- Sección de Artículos de Noticias -->
        <section id="inicio">
            <h2>Artículos de Noticias</h2>
            <!-- Tabla de Noticias -->
            <table>
                <tr>
                    <td>
                        <h3>Registro de alto impacto: Balean casa en La Florida y familia no hace denuncia</h3>
                        <p>Emitido el 21/02/2022</p>
                        <p>Un grupo de antisociales dispararon más de 100 veces al frontis de un domicilio. <br> El dueño de casa no se encontraba en el lugar, por lo que no se registran heridos. <br> Sin embargo, no realizó denuncias aumentando las sospechas de los vecinos.</p>
                        <!-- Video -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Qbl9unCtIFA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- Audio -->
                        <audio controls>
                            <source src="disparos.mp3" type="audio/mpeg">
                            Tu navegador no es compatible con el audio 
                        </audio>
                    </td>
                </tr>
                <!-- Repetir para más noticias -->
                <tr>
                    <td>
                        <h3>Hombre resulta herido de bala en La Florida</h3>
                        <p>Emitido el 07/04/2024</p>
                        <p>"Alrededor de las seis de la mañana, de acuerdo a la versión que entrega una testigo que viajaba como acompañante de la víctima que recibió los impactos balísticos, al llegar al cruce de calle Walker Martínez con Avenida Vespucio, enfrentan la luz roja del semáforo, se detienen y en ese mismo instante, son abordados por al menos tres sujetos con rostro cubierto, quienes al parecer intentan efectuar la sustracción del vehículo y al no lograr este cometido, efectúan al menos 10 disparos, de los cuales tres habrían impactado a la víctima", aseveró. Luego de recibir los disparos, continuó, "la víctima logra llegar hasta un centro asistencial (clínica Dávila Vespucio) por sus propios medios, conduciendo el vehículo en compañía de esta persona que está identificada como testigo en los hechos". Una vez en la clínica, dijo que "fue atendido por el personal de urgencia, quienes después de efectuarle los exámenes de rigor, pueden descartar que esta persona esté en riesgo vital y está trasladada a la UCI del mismo recinto". En el sitio del suceso se encuentra trabajando la Brigada de Homicidios (BH) Metropolitana de la PDI y ECOH de la Fiscalía.</p>
                        <!-- Imagen -->
                        <img src="balaflorida.jpg" alt="Imagen Noticia Deporte 1">
                    </td>
                </tr>
                <!-- Repetir para más noticias -->
                <tr>
                    <td>
                        <h3>Asistentes de un pub en Osorno caen a un subterráneo inundado tras el colapso del piso</h3>
                        <p>Emitido el 07/04/2024</p>
                        <p>El piso del pub discoteque Level's ubicado en la calle Ramírez de Osorno, región de Los Lagos, colapsó y provocó que los cerca de 40 asistentes que se encontraban en el lugar cayeran a un subterráneo que se encontraba inundado -de acuerdo a lo que ha trascendido, con agua acumulada de un incendio ocurrido el 18 de noviembre de 2019-. Según consignó El Austral de Osorno, el hecho ocurrió cerca de las 6 de la mañana del sábado, horario no permitido para el funcionamiento del recinto, por lo que se habría estado llevando a cabo un "after" clandestino.</p>
                        <!-- Imagen -->
                        <img src="pub.jpg" alt="Imagen Noticia Deporte 1">
                    </td>
                </tr>
            </table>
        </section>

        <!-- Sección de Deporte -->
        <section id="deporte">
            <h2>Deporte</h2>
            <!-- Tabla de Noticias de Deporte -->
            <table>
                <tr>
                    <td>
                        <h3>Uno jugó fútbol: La historia de la dupla de remeros chilenos que se clasificó a París 2024 y la revancha que buscan en los Olímpicos</h3>
                <p>Categoría: Deporte</p>
                <p>Serán los segundos olímpicos para Abaroa y Sanhueza. 07 de Abril de 2024 | 12:06 | Redactado por Felipe Santibáñez, Emol Eber Sanhueza y César Abaroa. Team Chile César Abaroa y Eber Sanhueza cruzaron la línea de meta a borde de su bote y sintieron una felicidad enorme. También alivio. La dupla de remeros chilenos se consagró campeona en la categoría doble ligero del Preolímpico de Río de Janeiro y aseguró su clasificación a París 2024. No serán los primeros Juegos Olímpicos para ellos. En Tokio fueron decimocuartos y terminaron con un sabor agridulce. Quieren una revancha. NOTICIA RELACIONADA La emotiva historia de Néstor Almanza, el joven luchador chileno de origen cubano que se clasificó a los JJ.OO. de París 2024 85 "Quedamos con esa bala atravesada, con ese gusto semi amargo. Por supuesto haber cumplido el sueño de ir está bien, pero uno también quiere competir. Ahora en París queremos dar vuelta esa sensación, demostrar de qué estamos hechos en un mega evento. Tenemos más años remando juntos en el bote, tenemos muchas cosas a favor. La ilusión sigue siendo la misma. Con estos Juegos se termina la categoría en la que competimos nosotros, va a ser la última regata del doble ligero. Ya no habrá más oportunidades para reivindicarse".</p>
                <!-- Imagen -->
                        <img src="deporte 1.jpg" alt="Imagen Noticia Deporte 1">
                    </td>
                </tr>
                <!-- Repetir para más noticias -->
                <tr>
                    <td>
                        <h3>Acusan a Messi de querer golpear a asistente del Monterrey de México: "Estaba endemoniado"</h3>
                <p>Categoría: Deporte</p>
                <p>En duelo por la Concachampions. 06 de Abril de 2024 | 08:48 | Redactado por Manuel Rojas, Emol Messi en la tribuna del citado partido. AFP El miércoles pasado el Inter de Miami, con Lionel Messi en la tribuna por una lesión, se enfrentó al Monterrey, en duelo válido por la ida de los cuartos de final de la Concachampions. El duelo terminó 2-1 en favor de los mexicanos, pero al finalizar el partido se desató la polémica. Tras el pitazo final, Messi fue a increpar al árbitro del encuentro junto a su DT, Gerardo Martino. Además, tuvieron un fuerte altercado con integrantes del cuerpo técnico rival, comandado por Fernando Ortiz. Los incidentes no quedaron ahí, porque dos días después de estos hechos se hizo viral un audio privado de Nico Sánchez, uno de los asistentes del DT de los Rayados, donde da su versión de lo sucedido y confirma el encontrón con el astro argentino. Tiró bombas y pese a que se disculpó por sus palabras, estas fueron reproducidas por diferentes medios de prensa y generaron un gran revuelo. NOTICIA RELACIONADA Inter Miami confirma lesión de Lionel Messi y desmiente polémica por posible sanción a Gerardo Martino por Concachampions 85 "No me lo dijo a mí, pero Leo Messi le quería pegar a Nacho [nacho Aliberti, otro asistente] el hijo de p...", se puede escuchar en el registro de Sánchez. "Estaba endemoniado, hasta el otro se dio cuenta que estaba endemoniado", agrega en el diálogo. "Hasta nosotros nos dimos cuenta. Hasta una persona que estaba cerca y no entendía nada de fútbol, un chavito, se me acerca y me dice: 'Oye, ¿no es cierto que se quiere pegar Messi a Nacho?'. Me dio risa, pero me dice: 'No, es que escuché que decía que se quería pegar'", revela el integrante del cuerpo técnico del Monterrey.</p>
                <!-- Imagen -->
                        <img src="deporte 2.jpg" alt="Imagen Noticia Deporte 2">
                    </td>
                </tr>
                <!-- Repetir para más noticias -->
                <tr>
                    <td>
                        <h3>La emotiva historia de Néstor Almanza, el joven luchador chileno de origen cubano que se clasificó a los JJ.OO. de París 2024</h3>
                <p>Categoría: Deporte</p>
                <p>El esfuerzo y la perseverancia como valores fundamentales. 05 de Abril de 2024 | 19:01 | Redactado por Emol Néstor Almanza AFP 47 Todo comenzó a la edad de 9 años, cuando Néstor Almanza se instaló en Chile tras dejar su Cuba natal. Con un pasado difícil y cargado de experiencias, el joven atleta decidió canalizar sus energías en la lucha olímpica, deporte que lo llevó a lo más alto, logrando así su clasificación a los Juegos Olímpicos de París 2024. La historia de Almanza es un claro ejemplo de esfuerzo, perseverancia y lucha por alcanzar los sueños, valores que lo han llevado a ser un referente en el deporte chileno. NOTICIA RELACIONADA ¿Por qué ha despertado polémica la clasificación de la esquiadora Erika Olivera a sus séptimos Juegos Olímpicos? 65 En una entrevista con Emol TV, Néstor Almanza relató su historia y los obstáculos que ha tenido que superar para llegar hasta donde está. "Mi historia es bastante dura. En Cuba me dejaron solo a los nueve años de edad y llegué a Chile sin conocer a nadie", partió contando el luchador. "Me vine con mi papá y desde muy chico tuve que aprender a valerme por mí mismo. Vivíamos en una pieza de 2x3 y no teníamos ni cama. Fue un shock cultural para mí, pero me adapté", agregó. En su adolescencia, Almanza encontró en la lucha olímpica una vía de escape y una oportunidad para construir un futuro mejor. "A los 13 años empecé a entrenar en lucha olímpica y me enamoré del deporte. Me gustó mucho desde un principio y sentí que era lo mío. No sé si era porque tenía mucha rabia acumulada o porque me gustó de verdad, pero desde ahí me propuse ser el mejor luchador de Chile", señaló.</p>
                <!-- Imagen -->
                        <img src="deporte 3.jpg" alt="Imagen Noticia Deporte 3">
                    </td>
                </tr>
            </table>
        </section>

         <!-- Sección de Negocios -->
         <section id="negocios">
            <h2>Negocios</h2>
            <!-- Tabla de Noticias de Negocios -->
            <table>
                <tr>
                    <td>
                        <h3>Diputado Oyarzo renuncia al PDG: "No hay un proyecto político en el partido, solo negocios y chantajes"</h3>
                <p>Categoría: Negocios</p>
                <p>A través de las páginas de "El Mercurio", el diputado Rubén Oyarzo adelanta la decisión adoptada de manera indeclinable, dice, respecto de renunciar a la militancia en el Partido de la Gente (PDG). De esa manera, la otrora bancada de seis integrantes quedara reducida a solo dos legisladores de una colectividad que representa la tercera fuerza política en cantidad de adherentes, por detrás del PC y del PS. En marzo de 2022 llegaron al Congreso Oyarzo, Gaspar Rivas, Karen Medina, Víctor Pino, Roberto Arroyo y Yovana Ahumada; dos años después, quedan siendo parte del comité PDG solo Medina y Rivas, aunque, con una reciente reconfiguración de fuerzas políticas, los PDG y exmilitantes de la colectividad se sumaron a la bancada de Demócratas, por lo que su presencia creció en teoría a prácticamente once diputados, los que de actuar en conjunto podrían aquilatar la aprobación de proyectos de ley en uno o en otro sentido, analizan en la Cámara. En esta entrevista, el parlamentario del distrito 8 también fija postura acerca de quien es su candidata para presidir la Cámara de Diputados, respaldo que dice recae en Joanna Pérez, de Demócratas. Eso, sobre una decisión que la corporación debería adoptar el próximo lunes 15 de abril, mientras que mañana tendrían que votar la renuncia de la mesa saliente liderada por el DC Ricardo Cifuentes. Consultado por El Mercurio, Oyarzo señaló que su salida se "venía desde hace un tiempo pensando y meditando. No estábamos en concordancia con el proyecto político que en un inicio era poner en el centro a la gente, ver sus prioridades, estar en terreno, representar a la clase media, a la clase media emergente y veíamos que eso lamentablemente se perdía, que era mas una secta; la política no puede ser el negocio de una persona, sino que tiene que estar a disposición de la gente y eso se perdió. No hay un proyecto político en el partido, solo hay negocios y chantajes, una demanda de un posible fraude, lo que denunciamos ante el Servel y no nos han escuchado. Llegó la hora de salirse del Partido de la Gente".</p>
                <!-- Imagen -->
                        <img src="diputado.jpg" alt="Imagen Noticia Negocios 1">
                    </td>
                </tr>
                <!-- Repetir para más noticias -->
                <tr>
                    <td>
                        <h3>Gremios mineros destacan a Exponor 2024 como 'punto de inflexión' para inversiones: Esperan negocios por US$900 millones</h3>
                <p>Categoría: Negocios</p>
                <p>"Significará un aporte importante para la reactivación económica desde la región al país", comentó el presidente del Consejo Minero, Joaquín Villarino La Asociación de Industriales de Antofagasta, AIA, organizó en la semana un inédito encuentro con los principales representantes de la CPC, Sofofa, Sonami, el Consejo Minero, junto a la Ministra de Minería, para analizar y discutir estrategias que fortalezcan la economía chilena.
                Ahí, la ministra de Minería, Aurora Williams, junto con reiterar el compromiso del gobierno en materia de inversión regional, subrayó la alta participación de empresas nacionales e internacionales en Exponor 2024 (3 y 6 de junio), que posiciona la cadena de valor de los proveedores, con oportunidad de internacionalizarse.
                “Es importante que se desarrolle en la región minera, con una proyección de negocios por más de US$900 millones, lo que natural y significativamente aporta no solo a la economía regional sino que a la macrozona norte y al país, brindando -en particular- un dinamismo a la industria minera”.</p>
                <!-- Imagen -->
                        <img src="negocio.jpg" alt="Imagen Noticia Negocios 2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Previo al IPC: Son malos los augurios para la inflación de marzo, acorde a lo advertido por el Banco Central</h3>
                        <p>Categoría: Negocios</p>
                        <p>El lunes a las 08.00 horas, el INE dará a conocer el Índice de Precios al Consumidor (IPC) del tercer mes del año.
                        Mañana a las 8.00 horas el Instituto Nacional de Estadísticas (INE) dará a conocer el Índice de Precios al Consumidor (IPC) de marzo y las proyecciones del mercado no son alentadoras para el dato inflacionario del país. Lo que en caso de concretarse, serían tres meses amargos para la inflación durante 2024. El IPC de enero fue de 0,7%, mientras que el de febrero 0,6%. Registros altos que han impactado en las proyecciones inflacionarias de 2024 y que alejan la posibilidad de alcanzar pronto la meta de 3% acumulado anual. Con este último dato, la inflación en el país acumuló un 1,3% en el año y 4,5% a doce meses respecto a la serie empalmada del índice. Con esto, la inflación anual terminó con su tendencia a la baja tras 14 meses.</p>
                        <!-- Imagen -->
                        <img src="banco.jpg" alt="Imagen Noticia Negocios 3">
                    </td>
                </tr>
            </table>
        </section>       
        
     <!-- Sección de Juegos -->
<section id="juegos">
    <h2>Juegos</h2>
    <!-- Tabla de Noticias de Juegos -->
    <table>
        <tr>
            <td>
                <h3>Final Fantasy VII: Rebirth es juego más esperado de The Game Awards 2023</h3>
                <p>Categoría: Juegos</p>
                <p>La gala de The Game Awards nos ha dejado un montón de sorpresas y noticias, pero una de las más llamativas y peculiares es, sin lugar a dudas, la del ganador a Juego Más Esperado de 2024. Recordemos, pues, que desde hace tiempo, TGA escoge el juego que más anticipación tiene entre los usuarios recogiendo sus diferentes votos. En esta ocasión, había cinco grandes títulos. Estos eran Final Fantasy VII Rebirth, Hades II, Like a Dragon: Infinite Wealth, Star Wars Outlaws y Tekken 8. Por supuesto, GTA 6 no podía entrar por dos razones. En primer lugar, porque se confirmó su ventana de lanzamiento hace muy poco. Seguidamente, porque no saldrá en 2024, sino en 2025. Es por esto mismo que no podía aparecer. También destacan ausencias como las de Hollow Knight: Silksong, pero sus numerosos retrasos (en teoría salía en 2024, pero no ha sido así) hacen de él todo un misterio. Seguimos sin saber cuándo se estrenará, aunque esperamos que sea el año que viene. Sea como fuere, eso es tema para otro día, puesto que en el presente texto quiero hablaros del juego más esperado de 2024.</p>
                <!-- Imagen -->
                <img src="juego 1.jpg" alt="Imagen Noticia Juegos 1">
            </td>
        </tr>
        <tr>
            <td>
                <h3>Los Sims 5 al descubierto: filtran el mapa, objetos y su ambiciosa jugabilidad</h3>
                <p>Categoría: Juegos</p>
                <p>Filtran multitud de datos sobre Project René, nombre en clave de Los Sims 5, donde podemos verlo en movimiento. Electronic Arts no elude las filtraciones. Project Rene, el nombre en clave de Los Sims 5, ya se encuentra en poder de algunos usuarios que no han dudado en compartir el material en redes sociales. La nueva entrega prepara un ambicioso plan para evolucionar la jugabilidad de la saga al siguiente nivel. El material filtrado corresponde a la versión de Android, pero la estructura se mantendrá intacta en la versión de sobremesa. ¿Qué novedades se han filtrado sobre Los Sims 5? La filtración ha ocurrido tanto en forma de vídeo como en texto. El usuario u/DzXAnt22 ha publicado en Reddit (puedes verlo aquí) casi siete minutos de puro gameplay del juego, donde podemos ver algunas mejoras relevantes. La primera es cómo funcionan los espacios. Al contrario del sistema de celdas que ha acompañado a la saga desde sus inicios, Project Rene apuesta por un sistema libre que permite una flexibilidad nunca vista aquí.  Solo hay que fijarse en la colocación de los objetos. Como ejemplo aparece la silla del 1:31. Un solo objeto se puede personalizar de varias maneras, desde el chasis hasta qué elementos tiene encima. Un cojín del asiento puede colocarse de diferentes formas, ya sea acostado o intentando colocarlo inclinado para que sirva de apoyo.</p>
                <!-- Imagen -->
                <img src="juego 2.jpg" alt="Imagen Noticia Juegos 2">
                <!-- Video -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dOEWP7M7mBw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display:block; margin:auto;"></iframe>
            </td>
        </tr>
    </table>
</section>

<!-- Sección de Películas -->
<section id="peliculas">
    <h2>Películas Recomendadas</h2>
    <!-- Tabla de Películas -->
    <table style="width: 100%;">
        <tr>
            <td style="vertical-align: top; padding: 20px;">
                <img src="star_wars_episode_1.jpg" alt="Star Wars Episodio 1" style="width: 150px; height: auto; display: block; margin: 0 auto 10px;">
                <div style="text-align: center;">
                    <p><strong>Star Wars Episodio 1: La Amenaza Fantasma</strong></p>
                    <p>Año: 1999</p>
                    <p>Género: Ciencia ficción, Aventura</p>
                    <p>Por qué verla: Esta película te sumerge en el emocionante universo de Star Wars desde el principio, presentando personajes inolvidables y una historia llena de acción y aventura.</p>
                </div>
            </td>
            <td style="vertical-align: top; padding: 20px;">
                <img src="kung_fu_panda_4.jpg" alt="Kung Fu Panda 4" style="width: 150px; height: auto; display: block; margin: 0 auto 10px;">
                <div style="text-align: center;">
                    <p><strong>Kung Fu Panda 4</strong></p>
                    <p>Año: 2024</p>
                    <p>Género: Animación, Comedia</p>
                    <p>Por qué verla: Con su animación de primera calidad y su humor encantador, Kung Fu Panda 4 es una película que disfrutarán tanto niños como adultos, con lecciones inspiradoras y momentos hilarantes.</p>
                </div>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; padding: 20px;">
                <img src="spy_x_family.jpg" alt="Spy X Family" style="width: 150px; height: auto; display: block; margin: 0 auto 10px;">
                <div style="text-align: center;">
                    <p><strong>Spy X Family Código: Blanco</strong></p>
                    <p>Año: 2023</p>
                    <p>Género: Acción, Comedia</p>
                    <p>Por qué verla: Esta película combina la acción emocionante con momentos cómicos, ofreciendo una experiencia entretenida y única que te mantendrá al borde del asiento.</p>
                </div>
            </td>
            <td style="vertical-align: top; padding: 20px;">
                <img src="profesion_peligro.jpg" alt="Profesión Peligro" style="width: 150px; height: auto; display: block; margin: 0 auto 10px;">
                <div style="text-align: center;">
                    <p><strong>Profesión Peligro</strong></p>
                    <p>Año: 2022</p>
                    <p>Género: Acción, Thriller</p>
                    <p>Por qué verla: Con una trama llena de giros inesperados y escenas de acción trepidantes, Profesión Peligro te mantendrá en vilo de principio a fin, sin dejar de sorprenderte.</p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="vertical-align: top; padding: 20px;">
                <img src="guerra_civil.jpg" alt="Guerra Civil" style="width: 150px; height: auto; display: block; margin: 0 auto 10px;">
                <div style="text-align: center;">
                    <p><strong>Guerra Civil</strong></p>
                    <p>Año: 2023</p>
                    <p>Género: Drama, Acción</p>
                    <p>Por qué verla: Esta película te sumerge en un drama intenso y emocionante, con actuaciones cautivadoras y una historia que te hará reflexionar sobre el poder y la humanidad.</p>
                </div>
            </td>
        </tr>
    </table>
</section>

<!-- Sección de Clima -->
<section id="clima">
    <h2>Clima en Chile</h2>
    <!-- Tabla de Pronóstico del Clima en Chile -->
    <table style="width: 100%;">
        <tr>
            <th>Ciudad</th>
            <th>Región</th>
            <th>Temperatura</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <td>Santiago</td>
            <td>Región Metropolitana</td>
            <td>25°C</td>
            <td>Soleado</td>
        </tr>
        <tr>
            <td>Valparaíso</td>
            <td>Región de Valparaíso</td>
            <td>22°C</td>
            <td>Nublado</td>
        </tr>
        <tr>
            <td>Concepción</td>
            <td>Región del Biobío</td>
            <td>20°C</td>
            <td>Lluvia Ligera</td>
        </tr>
        <!-- Agrega más ciudades y regiones según sea necesario -->
    </table>
</section>

<!-- Pie de Página -->
<footer style="text-align: center; background-color: #333; color: #fff; padding: 20px;">
    <p>&copy; 2024 El Faro - Todos los derechos reservados</p>
</footer>
