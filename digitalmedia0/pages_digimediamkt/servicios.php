<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Styles Box Icons-->
    <link href="https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../src/style/servicios.css" type="text/css" />
    <link rel="stylesheet" href="../src/style/partials/footer.css">
    <link rel="stylesheet" href="../src/style/partials/navbar.css">
    <script src="../js/index.js" text="text/javascript"></script>

    <title>Servicios</title>
</head>

<body>
    <div>

        <?php include_once "header.php"; ?>

        <div class="espacio" style="height: 40px;"></div>

        <main class="main">
            <div class="servicios">
                <span>Servicios</span>
            </div>
            <div class="titulo">
                <h1>EL MARKETING DIGITAL EN 3 PASOS</h1>
            </div>

            <div class="container">

                <div class="mark">
                    <img src="../src/images/Mark inicio.webp" alt="">
                </div>


                <div class="card">
                    <h1>Paso 1:</h4>
                        <img src="../src/images/carnet-de-identidad.webp">
                        <div class="descripcion">
                            <p>Crear una identidad para diferenciarte en el mercado</p>
                        </div>
                </div>

                <div class="card">
                    <h1>Paso 2:</h4>
                        <img src="../src/images/diana.webp">
                        <div class="descripcion">
                            <p>Define tus objetivos y estrategias en redes sociales e internet</p>
                        </div>
                </div>

                <div class="card">
                    <h1>Paso 3:</h4>
                        <img src="../src/images/chat.webp">
                        <div class="descripcion" id="paso3">
                            <p>Comunícate constantemente con tu público para conocer sus necesidades y cubrirlas con tus productos o servicios</p>
                        </div>
                </div>

            </div>

        </main>

        <div class="espacio" style="height: 50px;"></div>

        <section class="section">
            <div class="info">
                <p>DigiMedia es una agencia que gestiona estrategias de marketing digital con el objetivo de incrementar las ventas de las PYMES y emprendimientos en el Perú. Para ello, trabajamos como un Laboratorio Emprendedor que busca constantemente crear planes de marketing y publicidad innovadores y eficientes que contribuirán al crecimiento de tu negocio en el mundo digital.</p>
            </div>
        </section>

        <div class="espacio" style="height: 20px;"></div>

        <div class="historia__productos">
            <div class="tarjeta">
                <a href="../src/pages/marca.php"><img src="../src/images/marca.png" alt="crear mi marca" />
                </a>
            </div>
            <div class="tarjeta">
                <a href="../src/pages/marketing.php"><img src="../src/images/marketing.png" alt="marketing digital" />
                </a>
            </div>
            <div class="tarjeta">
                <a href="../src/pages/diseño.php"><img src="../src/images/diseño.png" alt="diseño grafico" />
                </a>
            </div>
            <div class="tarjeta">
                <a href="../src/pages/web.php"><img src="../src/images/web.png" alt="diseño web" />
                </a>
            </div>
        </div>

        <div class="espacio" style="height: 20px;"></div>

        <form class="my-form">
            <div class="formulario">
                <div class="espacio" style="height: 20px;"></div>
                <h1>¿ESTÁS LISTO PARA <br>EMPRENDER?</h1> <br>
                <ul>
                    <li>
                        <div class="grid grid-2">
                            <input type="text" placeholder="Nombre" required>
                            <input type="email" placeholder="Email" required>
                        </div>
                    </li>
                    <li>
                        <div class="grid grid-2">
                            <input type="cel" placeholder="Teléfono" required>
                            <input type="text" placeholder="Empresa" required>
                            <input type="text" placeholder="Ubicacion">
                        </div>
                    </li>
                </ul>
                <input type="button" value="Enviar" class="btnEnviar">
            </div>
            <div class="espacio" style="height: 50px;"></div>
        </form>

        <div class="espacio" style="height: 150px;"></div>


        <?php include_once "footer.php"; ?>


        <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>

</body>

</html>