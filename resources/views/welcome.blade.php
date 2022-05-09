<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>SENA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
         <style>

        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
        
            height: 400px;
            background-image: url("./img/titulo.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            background-position: center center;
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
          
            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

         
        }

        .center {
    margin-left: auto;
    margin-right: auto;
    display: block;
}
    
    </style>
         </style>

       
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">

    <div>
        <img src="./img/Prin.png" alt="Logo del SENA" class="center">
    </div>

    
    
        <h1 class="blog-post-title">
          <span class="hs_cos_wrapper hs_cos_wrapper_meta_field hs_cos_wrapper_type_text" style="" data-hs-cos-general-type="meta_field" data-hs-cos-type="text">"La diciplina es el ingrediente mas importante del éxito"</span>
        </h1>
            

    
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

            
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="./img/carrusel/logo_large.png"
                        class="d-block w-100" alt="Colombia 4.0" title="Colombia 4.0">
                </div>

                <div class="carousel-item">
                    <a href="https://www.fondoemprender.com/SitePages/FondoEmprenderConv872020.aspx"><img
                            src="./img/carrusel/Emprender.JPG"
                            alt="Fondo Emprender - Convocatoria 87" title="Fondo Emprender - Convocatoria 87"></a>
                </div>

                <div class="carousel-item">
                    <a href="https://forms.office.com/r/LW2FjwnccS"><img
                            src="./img/carrusel/BANNER-WEB-CCL-GRAN-CERTIFICATON2022.JPG"
                            alt="Certificaton" title="Certificaton"></a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.fondoemprender.com/SitePages/FondoEmprenderConv902020.aspx"><img
                            src="./img/carrusel/JOVENES_22042022.JPG"
                            alt="Fondo Emprender - Convocatoria 90" title="Fondo Emprender - Convocatoria 90"></a>
                </div>

                <div class="carousel-item">
                    <a href=""><img
                            src="./img/carrusel/YANHAAS_BANNERWEB_21042022.JPG"
                            alt="Encuestas Yahass" title="Encuestas Yahass"></a>
                </div>

                <div class="carousel-item">
                    <a href="https://forms.office.com/r/VfJhdXvYyU"><img
                            src="./img/carrusel/BANNER-WEB-1-CCL-GASTRO-TURISMO-05042022.JPG"
                            alt="Certificatón" title="Certificatón"></a>
                </div>

                <div class="carousel-item">
                    <a href="https://bit.ly/3IxKQLF"><img
                            src="./img/carrusel/BANNER-WEB-1-FRECUENCIA-MARZO-25.PNG"
                            alt="Frecuencia SENA" title="Frecuencia SENA"></a>
                </div>

                <div class="carousel-item">
                    <a href="https://www.sena.edu.co/es-co/conectados/index.aspx"><img
                            src="./img/carrusel/SENAAPP_BANNERWEB-03_06042021.PNG"
                            alt="Descarga SENA APP clic para ver" title="Descarga SENA APP clic para ver"></a>
                </div>
            

        
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        <br>
        <br>
        <br>
        <br>

 <h2 class="text-center"> Quiénes somos </h2>
        <p>Somos un establecimiento público del orden Nacional y con autonomía administrativa, adscrito al Ministerio del Trabajo.</p>

        <p style="text-align&#58;left;">
            <span class="ms-rteFontSize-2"></span></p><p style="text-align&#58;left;">
            <span style="font-size&#58;14.6667px;line-height&#58;23.4667px;">Contamos con</span>&#58;</p>
            <ul style="text-align&#58;left;"><li>
               <span style="font-size&#58;11pt;line-height&#58;1.6;">Personería jurídica.</span></li>
               <li>
               <span style="font-size&#58;11pt;line-height&#58;1.6;">Patrimonio propio e independiente.</span></li>
               <li>
               <span style="font-size&#58;11pt;line-height&#58;1.6;">Autonomía administrativa.</span></li></ul>
               <p style="text-align&#58;justify;"> 
            <span class="ms-rteFontSize-2">Ofrecemos 
               <strong>formación gratuita</strong> a millones de colombianos que se benefician con<strong> programas técnicos, tecnológicos y complementarios</strong> que enfocados en el desarrollo económico, científico y social del país, entran a fortalecer las actividades productivas de las empresas y de la industria, para obtener mejor competitividad y mayores resultados en los diferentes mercados.&#160;<br></span></p><p style="text-align&#58;justify;"> 
            <span class="ms-rteFontSize-2">Autorizada por el Estado para invertir en infraestructura necesaria para mejorar el desarrollo social y técnico de los trabajadores en las diferentes regiones, a través de 
               <strong>formación profesional integral</strong> que logra incorporarse con las metas del Gobierno Nacional, mediante el cubrimiento de las necesidades específicas de recurso humano en las empresas. Por medio de la 
               <strong>vinculación al mercado laboral</strong> -bien sea como empleado o subempleado-, con grandes oportunidades para el desarrollo empresarial, comunitario y tecnológico. &#160;</span></p><p style="text-align&#58;justify;"> 
            <span class="ms-rteFontSize-2">La Entidad más querida por los colombianos funciona desde su creación en 
               <strong>permanente alianza entre el Gobierno, los empresarios y los trabajadores</strong>, con el firme propósito de aumentar la capacidad de progreso en Colombia a través del incremento de la productividad en las empresas y regiones, sin dejar de lado la inclusión social, alineados con la política nacional&#58; 
               <strong>Más empleo y menos pobreza</strong>. Por tal razón, 
               <strong>se generan continuamente programas y proyectos</strong> de responsabilidad social, empresarial, formación, innovación, internacionalización y transferencia de conocimientos y tecnologías.</span><br></p>
               <p style="text-align&#58;left;"></p><p style="text-align&#58;left;"></p>
               <div class="textoComillas" style="text-align&#58;left;"><div class="marks orange"><div> ​“<br></div><div></div></div><p> 
               <span class="ms-rteFontSize-2">El SENA impulsa el desarrollo tecnológico para que las empresas del país sean altamente productivas y competitivas en los mercados globalizados​​.</span><br></p></div>
               <h1 style="text-align&#58;left;">Escudo y Bandera</h1>
               <img alt="Escudo" src="./img/escudo.jpg" title="escudo.jpg" style="margin&#58;5px;width&#58;180px;" />
               <p style="text-align&#58;left;"> 
            <span class="ms-rteFontSize-2">El escudo y la bandera del SENA, fueron diseñados cuando se fundó nuestra institución y reflejan los tres sectores económicos dentro de los cuales operamos&#58;</span></p>
            <div class="container" style="max-width&#58;100%;"><div class="row"><div class="col-sm-6"><ol style="text-align&#58;left;"><li>
                        <span style="font-size&#58;11pt;line-height&#58;1.6;">El piñón, representativo del secto</span><span style="font-size&#58;11pt;line-height&#58;1.6;">r industria</span><span style="font-size&#58;11pt;line-height&#58;1.6;">.</span></li><li>
                        <span style="font-size&#58;11pt;line-height&#58;1.6;">El caduceo, asociado al de comercio y servicios.</span></li><li>
                        <span style="font-size&#58;11pt;line-height&#58;1.6;">El&#160;café, ligado al primario y extractivo.</span></li></ol></div><div class="col-sm-6"><center style="text-align&#58;left;"> 
                    
                  </div></div></div>
                  <p style="text-align&#58;left;">&#160;<br></p>
                  <p style="text-align&#58;left;">&#160;</p>
                  <p style="text-align&#58;left;">&#160;<br></p>
                  <h1 style="text-align&#58;left;">Logosímbolo<br></h1>
                  <img alt="logo Sena" src="./img/Logo.png" title="logo_sena.jpg" style="margin&#58;5px;width&#58;165px;height&#58;154px;" />
         <div class="row">
         <div class="col-sm-6"><p style="text-align&#58;left;"><span class="ms-rteFontSize-2"><br></span></p><p style="text-align&#58;left;"> 
            <span class="ms-rteFontSize-2">El logosímbolo representa gráficamente los enfoques de la formación que impartimos en la que el individuo es el responsable de su propio proceso de aprendizaje.&#160;​</span></p></div><div class="col-sm-6"><div style="text-align&#58;left;">
               </div></div></div>
         <p style="text-align&#58;left;">&#160;<br></p>
         <p style="text-align&#58;left;"></p>
         <p style="text-align&#58;left;"></p>
         <h1 style="text-align&#58;left;">Historia<br></h1>
         <p style="text-align&#58;justify;"> 
            <span class="ms-rteFontSize-2">Nacimos en el año 1957, durante el gobierno de la Junta Militar -posterior a la renuncia del General Gustavo Rojas Pinilla-. Nuestra función fue 
               <strong>brindar formación profesional a trabajadores, jóvenes y adultos</strong> de la industria, el comercio, el campo, la minería y la ganadería. Esta institución surgió gracias a Rodolfo Martínez Tono, quién fue su fundador.</span></p>
               <p style="text-align&#58;justify;">
            <span class="ms-rteFontSize-2">Desde nuestros inicios, siempre buscamos proporcionar 
               <strong>instrucción técnica</strong> al empleado, 
               <strong>formación complementaria</strong> para adultos, y ayudarles a los empleadores y trabajadores a 
               <strong>establecer un sistema nacional de aprendizaje.</strong><br></span></p>
               <p style="text-align&#58;justify;"> 
            <span class="ms-rteFontSize-2">Nuestra Entidad que tiene una estructura conformada por 
               <strong>trabajadores, empleadores y Gobierno</strong>, se llamó 
               <strong>Servicio Nacional de Aprendizaje (SENA)</strong>, nombre que conserva en la actualidad. Desde ese entonces y hasta ahora, buscamos seguir conquistando nuevos mercados, suplimos a las empresas de mano calificada utilizando métodos modernos y continuamos trabajando para lograr un cambio de paradigma en cada uno de los procesos de la productividad.</span><br></p><div style="text-align&#58;left;"></div><div style="text-align&#58;center;"> 

    </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>



       </div>
    </div>
    </body>
</html>
