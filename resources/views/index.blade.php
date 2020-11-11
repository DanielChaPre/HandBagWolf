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
      <p>Vestibulum amet</p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Placerat:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Porttitor:</strong><br>
          +00 (123) 456 7890</li>
         
      </ul>

      
    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.html">Gallery</a></li>
          <li><a href="pages/full-width.html">Full Width</a></li>
          <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
          <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
          <li><a href="pages/basic-grid.html">Basic Grid</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">Dropdown</a>
        <ul>
          <li><a href="#">Level 2</a></li>
          <li><a class="drop" href="#">Level 2 + Drop</a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
      </li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>
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
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Sed diam et lacinia aliquam</p>
      <h3 class="heading">HandBag Wolf</h3>
      <p>Consectetur in dolor vitae consectetur maecenas id ultrices</p>
      <footer><a class="btn" href="#">Dolor nam hendrerit</a></footer>
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
        <h6 class="heading">Turpis ac elit placerat porta</h6>
        <p>Quisque commodo orci id convallis vestibulum justo convallis</p>
      </div>
      <ul class="nospace group">
        <li class="one_third first">
          <article><i class="fa fa-futbol-o"></i>
            <h6 class="heading font-x1"><a href="#">Tortor ultrices</a></h6>
            <p>Aliquam lacus commodo sit amet dui quis placerat ac hendrerit massa etiam ultrices metus maximus [<a href="#">&hellip;</a>]</p>
          </article>
        </li>
        <li class="one_third">
          <article><i class="fa fa-linode"></i>
            <h6 class="heading font-x1"><a href="#">Vestibulum facilisis</a></h6>
            <p>Augue ante auctor elit in iaculis nibh arcu sit amet sem tellus sed ligula vestibulum dictum in [<a href="#">&hellip;</a>]</p>
          </article>
        </li>
        <li class="one_third">
          <article><i class="fa fa-s15"></i>
            <h6 class="heading font-x1"><a href="#">Aliquet condimentum</a></h6>
            <p>Elit donec sodales varius dictum etiam sit amet elit metus sed ac ligula odio et placerat arcu sed [<a href="#">&hellip;</a>]</p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <section>
      <div class="sectiontitle">
        <h6 class="heading">Ligula turpis placerat quis</h6>
        <p>Lobortis eu rutrum ut magna vivamus sodales quis nibh sit</p>
      </div>
      <ul class="nospace group overview">
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Amet tincidunt</h6>
              <p>Etiam pulvinar mollis dui vitae porta orci fringilla.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Tempus nulla non</h6>
              <p>Fermentum enim curabitur posuere sit amet quam sed.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Tristique cras</h6>
              <p>Purus arcu condimentum non euismod non feugiat nec.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Leo vestibulum</h6>
              <p>Mi fringilla non tellus eu ornare lobortis mauris.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Quisque auctor</h6>
              <p>Neque nibh in porta lacus iaculis nec duis convallis.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a href="#"><img src="images/demo/320x240.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Sapien imperdiet</h6>
              <p>Lacinia ligula mauris pretium diam nec hendrerit.</p>
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
    <h6 class="three_quarter first">Enim nulla nec eros malesuada ligula nec finibus</h6>
    <footer class="one_quarter"><a class="btn" href="#">Congue venenatis &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
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
    <footer class="center"><a class="btn" href="#">View All Posts &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x100.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Est aenean fermentum</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
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
    </div>
    <div class="one_quarter">
      <h6 class="heading">Aliquam risus dolor at</h6>
      <p class="nospace btmspace-15">Ultricies neque sollicitudin sit amet phasellus vel est quam vivamus finibus.</p>
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
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
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