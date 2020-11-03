<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Somos un equipo de trabajo conformado por marketeros, comunicadores y diseñadores gráficos que realizan estrategias innovadoras, creativas y eficientes de marketing digital para que tu negocio aumente sus ventas. ">
    <!--Styles Box Icons-->
    <link href="https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet"  />
    <link rel="stylesheet" href="../src/style/nosotros.css" type="text/css" />
    <link rel="stylesheet" href="../src/style/partials/footer.css">
    <link rel="stylesheet" href="../src/style/partials/navbar.css">
    <script src="../js/index.js" text="text/javascript"></script>

    <title>Nosotros | Agencia de Marketing Digital para PYMES| DigiMedia – Laboratorio Emprendedor </title>
  </head>
  <body>
    <div class="contenedor">
      
      <?php include_once "header.php"; ?>
      
    <div class="espacio" style="height: 40px;"></div>

      <main class="main">
        <div class="nosotros">
          <span>Nosotros</span>
        </div>
        <div class="descripcion">
          <div class="descripcion-cuerpo">
            <p>
              Somos un equipo de trabajo conformado por marketeros, comunicadores y diseñadores
              graficos que realizar estrategias innovadoras, creativas y eficientes de marketing digital
              para que tu negocio aumente sus ventas. Nuestros planes de marketing se caracterizan
              no solo por diseñar publicidad atractiva, sino que empleamos herramientas digitales que 
              garanticen el crecimiento sostenido de tu PYME o emprendimiento; por ello, nos 
              enfocamos en generar contenido que ayude a captar más clientes para tu empresa.
            </p>
          </div>
        </div>
        
        <div class="grafico">
          <img src="../src/images/marketing_digital_pymes.webp" />
        </div>

        <div class="estrategia">
          <div id="one" class="estrategia-cuerpo">
              <div class="estrategia-titulo">
                <h3>UNA ESTRATEGIA DE MARKETING DIGITAL PERMITE:</h3>
              </div>
              <div class="estrategia-lista">
                <li>Hacer mas conocida tu empresa</li>
                <li>Más oportunidad de negocio</li>
                <li>Incrementar ventas</li>
                <li>Generar más dinero</li>
              </div>
          </div>
          <div id="two" class="estrategia-cuerpo">
            <img src="../src/images/ventas_y_emprendimiento.webp" alt="" >
          </div>
        </div>
        
        <div class="objetivo">
          <div class="objetivo-cuerpo">
            <p>
              En DIGIMEDIA tenemos como objetivo liderar la transformación digital 
              de las PYME en el Perú a través de estrategias de marketing digital 
              que ayuden al crecimiento comercial de los emprendimientos en nuestro país.
            </p>
          </div>
        </div>
        
      </main>
    </div>

    <?php include_once "footer.php"; ?>

  <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
    <script>
    //Efectos de transicion segun ventana
    
    const estrategiaCuerpo = document.querySelector("#one");
    const estrategiaImg = document.querySelector("#two");
    const estrategiaTitulo = document.querySelector(".estrategia-titulo");
    const estrategiaLista = document.querySelector(".estrategia-lista");
    window.addEventListener("scroll" , ()=>{
        if ( window.scrollY > 100){
            estrategiaTitulo.classList.add("efectoTitulo");
            estrategiaCuerpo.classList.add("efectoEstrategia");
            estrategiaLista.classList.add("efectoLista");
            estrategiaImg.classList.add("efectoImagen");
        }
    });
     //Js para index
     const imgSlide = document.querySelector(".grafico");
      const img = () => {
        setTimeout(() => {
          imgSlide.classList.remove("imgSlide3");
          imgSlide.classList.add("imgSlide1");
        }, 2000);
        setTimeout(() => {
          imgSlide.classList.remove("imgSlide1");
          imgSlide.classList.add("imgSlide2");
        }, 4000);
        setTimeout(() => {
          imgSlide.classList.remove("imgSlide2");
          imgSlide.classList.add("imgSlide3");
        }, 6000);
      };
      setInterval(() => {
        img();
      }, 6000);
    </script>
  </body>
</html>

