<!DOCTYPE html>
<!--
Template Name: Chershoee
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>HandBag Wolf</title>
  <link rel="shortcut icon" href="{{ asset('images/bolsa/logo.ico') }}">.
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">HandBag Wolf</a></h1>
      <p>Bolsos de Calidad</p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Celular:</strong><br>
          +52 (477) 233 2968</li>
        <li><strong>Telefono:</strong><br>
          +52 (477) 233 2968</li>

      </ul>


    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <!-- <li class="active"><a href="index.html">Home</a></li> -->
      <li><a class="drop" href="#">Catalogo</a>
        <ul>
          <li><a href="#">Producto</a></li>
          <li><a href="#">Materiales</a></li>
        </ul>
      </li>
      
      <li><a href="{{ route('register') }}">Registro</a></li>
      <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                       <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Loginxxx</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/bolsa/bolsa 7.jpg');">
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article>
      <p>Bolsas de Calidad</p>
      <h3 class="heading">HandBag Wolf</h3>
      <p>A los Mejores precios por pedidos</p>
      <footer><a class="btn" href="#">Hacer Pedido</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading">Quienes Somos</h6>
        <p>Handbag Wolf es una empresa 100% mexicana constituida en septiembre de 2020.
        Nos enfocamos en los negocios, especialmente somos una empresa que brinda bolsos de alta calidad con una variedad de diseños únicos.
        Desde que hemos diseñado una forma de solicitar un pedido hasta que puedas crear tu propio diseño desde nuestro sitio web,
        nos diferenciamos innovando la forma en que realizas tu pedido.</p>
      </div>
      <ul class="nospace group">
        <li class="one_third first">
          <article style="height:250px"><i class="fa fa-futbol-o"></i>
            <h6 class="heading font-x1"><a href="#">Mision</a></h6>
            <p>Somos una pequeña empresa familiar de artesanas.
Creamos bolsos confeccionados a mano, utilizando principalmente retales de cuero.
Dirigido a un mercado femenino que aprecie el valor de un producto artesano singular,
fundamentado en el diseño y en la calidad de la confección y acabado de cada bolso </p>
          </article>
        </li>
        <li class="one_third">
          <article style="height:250px"><i class="fa fa-linode"></i>
            <h6 class="heading font-x1"><a href="#">Vision</a></h6>
            <p>Ser una empresa apreciada por su trabajo, que sea una referencia en la elaboración de bolsos artesanales en un ámbito internacional.
            Con la idea de crecer de manera ininterrumpida en nuestra actividad,
            trabajar e investigar constantemente en nuevas formas, técnicas y materiales. </p>
          </article>
        </li>
        <li class="one_third">
          <article style="height:250px"><i class="fa fa-s15"></i>
            <h6 class="heading font-x1"><a href="#">Valores</a></h6>
            <p>Honestidad,
            Calidad,
            Exclusividad,
            Reciclaje,
            Pasión.</p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <section>
      <div class="sectiontitle">
        <h6 class="heading">Algunos de nuestros productos</h6>
        <p>Aqui vemos una variedad de los bolsos de calidad</p>
      </div>
      <ul class="nospace group overview">
        <li class="one_third">
          <figure style="height:250px"><a href="#"><img src="images/bolsa/bolsa 1.jpg" style="height:225px;width:225px" alt=""></a>
            <figcaption>
              <h6 class="heading">BOLSA TOTE NEGRA GRABADA</h6>
              <p>Bolsa tote con logotipo.
              2 Asas de mano.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third" >
          <figure style="height:250px"><a href="#"><img src="images/bolsa/bolsa 2.jpg" style="padding-top:40px;height:200px;width:225px" alt=""></a>
            <figcaption>
              <h6 class="heading">NUBILY Bolsa Tote Mujer Cuero Ligero</h6>
              <p> La base metálica de los pies protege su bolso del daño. El bolso está perfectamente equilibrado y tiene un estilo hermoso donde quiera que vaya, las líneas simples y los colores sólidos hacen que este bolso de Hombro grande para negocios sea una pieza clásica.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure style="height:250px"><a href="#"><img src="images/bolsa/bolsa 3.jpg" style="height:225px;width:225px" alt=""></a>
            <figcaption>
              <h6 class="heading">Shinon - Bolso bandolera de nailon para mujer</h6>
              <p>nailon
              Cierre de Cremallera
              Estructura: 2 compartimentos principales con cierre,
              3 compartimentos frontales con cierre,
              1 bolsillo trasero con cierre, 1 bolsillo con cierre.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure style="height:250px"><a href="#"><img src="images/bolsa/bolsa 4.jpg" style="padding-top:30px;height:225px;width:225px" alt=""></a>
            <figcaption>
              <h6 class="heading">Bolsa cartera con diseño de lazo y corazón metálico</h6>
              <p>Estilo:	Elegante
              Color:	Negro
              Detalles:	Lazo
              Tipo:	Bolsa con manija
              Tipo de tirantes:	Ajustable, Doble Asa
              Magnético:	No
              Composición:	20% Poliéster, 80% Cuerina
              Talla del bolso:	Pequeño.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure style="height:250px"><a href="#"><img src="images/bolsa/bolsa 5.jpg" style="height:225px;width:225px"alt=""></a>
            <figcaption>
              <h6 class="heading">Juego De Bolsos Con Estampado Geométrico, 5 Piezas</h6>
              <p>Conjunto de 5 piezas bolso de mano de patrón geométrico bolso de mano Tipo de bolso
              : bolso de hombro estilo
              : Moda Género: Para mujeres
              Tipo de patrón: Otros
              Tamaño del bolso: Medio (30-50cm)
              Tipo de cierre: Cremallera
              Ocasión: Versátil
              Material principal: PU</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure style="height:250px"><a href="#"><img src="images/bolsa/bolsa 6.jpg" style="height:225px;width:225px" alt=""></a>
            <figcaption>
              <h6 class="heading">La fábrica de bolsos Dama al por mayor de 10 años de la mochila de moda Dama Bolso</h6>
              <p></p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <article class="hoc cta clear">
    <!-- ################################################################################################ -->
    <h6 class="three_quarter first">Bolsas de calidad a los mejores precios</h6>
    <footer class="one_quarter"><a class="btn" href="#">Consiguelos Ahora &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper row3">
  <section class="hoc container clear">
     ################################################################################################ 
    <div class="sectiontitle">
      <h6 class="heading">Et ipsum suscipit sit amet</h6>
      <p>Molestie dolor blandit mauris porta quam erat ut laoreet velit</p>
    </div>
    <ul class="nospace group latest">
      <li class="one_half first">
        <article>
          <div class="excerpt">
            <ul class="nospace meta">
              <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
            </ul>
            <h6 class="heading">Tempus at donec finibus</h6>
            <p>Ex quis ullamcorper lobortis quisque imperdiet semper mi vitae aliquet justo feugiat sodales in quis velit vitae risus malesuada varius aenean diam lacus vestibulum vel erat elementum [<a href="#">&hellip;</a>]</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
          <time datetime="2045-04-06T08:15+00:00"><strong>06</strong> <em>Apr</em></time>
        </article>
      </li>
      <li class="one_half">
        <article>
          <div class="excerpt">
            <ul class="nospace meta">
              <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
              <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
            </ul>
            <h6 class="heading">Lobortis mi suspendisse</h6>
            <p>Consequat dui dolor sit amet tincidunt erat sollicitudin id ut vel posuere eros nunc id ipsum mi aenean pulvinar ultrices blandit duis iaculis diam laoreet placerat vitae consequat [<a href="#">&hellip;</a>]</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
          <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
        </article>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">Ver Relacionados &raquo;</a></footer>
     ################################################################################################ 
  </section>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2" >
  <div>
    <figure class="hoc container clear clients" >
      <!-- ################################################################################################ -->
      <ul class="nospace group " >
        <li class="one_quarter first"><a href="#"><img src="images/bolsa/bolsa 8.jpg" style="height:225px;width:225px" alt=""></a></li>
        <li class="one_quarter"><a href="#"><img src="images/bolsa/bolsa 9.jpg" style="height:225px;width:225px" alt=""></a></li>
        <li class="one_quarter"><a href="#"><img src="images/bolsa/bolsa 10.jpg" style="height:225px;width:225px" alt=""></a></li>
        <li class="one_quarter"><a href="#"><img src="images/bolsa/bolsa 11.jpg" style="height:225px;width:225px" alt=""></a></li>
      </ul>
      <!-- ################################################################################################ -->
    </figure>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Estamos Localizados</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Calle Joaquin Soto &amp; 226, Leon 1, 37235
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +52 (477) 233 2968</li>
        <li><i class="fa fa-envelope-o"></i>quique-43@hotmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <!-- <div class="one_quarter">
      <h6 class="heading">Ante volutpat iaculis</h6>
      <ul class="nospace linklist">
        <li><a href="#">Ipsum eu urna tristique</a></li>
        <li><a href="#">Tempor nunc aliquet</a></li>
        <li><a href="#">Ipsum sit amet mollis</a></li>
        <li><a href="#">Ullamcorper odio velit</a></li>
        <li><a href="#">Vulputate magna at rhoncus</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Nisl commodo ut nam</h6>
      <ul class="nospace linklist">
        <li><a href="#">Turpis diam eget quam in</a></li>
        <li><a href="#">Blandit sed nulla id tempor</a></li>
        <li><a href="#">Duis interdum ligula at</a></li>
        <li><a href="#">Lectus venenatis blandit</a></li>
        <li><a href="#">Nulla molestie tellus</a></li>
      </ul>
    </div> -->
    <div class="one_quarter">
      <h6 class="heading">Suscribete</h6>
      <p class="nospace btmspace-15">Suscribete para recibir ofertas de nuestras promociones o noticias de nuvos modelos</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
