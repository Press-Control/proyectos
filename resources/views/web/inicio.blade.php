@extends('farmacia.esqueleto')
  @include('seccion.header')
  <section id="main-slider" class="shop-06-banner">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="img-fluid" src="web/images/shop/banner/05.jpg" alt="slider">
            <div class="slider-content">
              <div class="container">
              <div class="row">
                <div class="col-md-12 text-left">
                 <div class="slider">
                    <h1 class="animated5">Promoción/Producto</h1>
                    <p class="text-black mt-20 mb-30 animated5">Los mejores productos en el mercado</p>
                    <a class="button black button-border animated5" href="#">Ver más</a>
                    <a class="button black ml-10 animated5" href="#">Comprar</a>
                 </div>
                </div>
              </div>
            </div>
         </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="web/images/shop/banner/06.jpg" alt="slider">
            <div class="slider-content">
             <div class="container">
              <div class="row">
                <div class="col-md-12 text-left">
                  <div class="slider">
                    <h1 class="animated5">Promoción/Producto</h1>
                    <p class="text-black mt-20 mb-30 animated5">Los mejores productos en el mercado</p>
                    <a class="button black button-border animated5" href="#">Ver más</a>
                    <a class="button black ml-10 animated5" href="#">Comprar</a>
                 </div>
                </div>
              </div>
           </div>
         </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</section>

<!--=================================
 banner -->


 <!--=================================
 shop-06-sub-banner -->

  <section class="shop-06-sub-banner black-bg pt-40 pb-40">
    <div class="container">
      <div class="row">
      <div class="col-lg-3 col-sm-6 sm-mb-30">
      <div class="feature-text left-icon">
          <div class="feature-icon">
          <span class="ti-loop text-white"></span>
        </div>
        <div class="feature-info">
          <h6 class="pt-15 text-white">Return &amp; Exchange</h6>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-sm-6 sm-mb-30">
      <div class="feature-text left-icon">
         <div class="feature-icon">
          <span class="ti-gift text-white"></span>
        </div>
        <div class="feature-info">
          <h6 class="pt-15 text-white">Tarjetas de regalo</h6>
        </div>
      </div>
     </div>
      <div class="col-lg-3 col-sm-6 xs-mb-30">
       <div class="feature-text left-icon">
           <div class="feature-icon">
            <span class="ti-user text-white"></span>
          </div>
          <div class="feature-info">
            <h6 class="pt-15 text-white">Soporte en línea</h6>
          </div>
        </div>
       </div>
        <div class="col-lg-3 col-sm-6">
       <div class="newsletter fancy text-center">
         <input class="form-control placeholder" type="text" placeholder="Email address" name="email1" value="">
          <div class="clear">
            <button type="submit" name="submitbtn" class="button form-button">Like y Subscribete</button>
          </div>
          </div>
       </div>
     </div>
    </div>
  </section>

<!--=================================
shop-06-sub-banner -->

<!--=================================
product -->

<section class="shop-06-product page-section-ptb">
   <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h2 class="title-effect">Nueva colección</h2>
          </div>
       </div>
    </div>
      <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">
         <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/01.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">añadir al carrito</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Nombre del producto</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
            </div>
         </div>
       </div>
       <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/02.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">añadir al carrito</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Nombre del producto</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
            </div>
         </div>
        </div>
        <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/03.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">añadir al carrito</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Nombre del producto</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
            </div>
         </div>
        </div>
        <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/04.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">añadir al carrito</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Nombre del producto</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
             </div>
            </div>
         </div>
         <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/05.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">añadir al carrito</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Nombre del producto</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
             </div>
            </div>
         </div>
        </div>
       </div>
      </div>
     </div>
</section>

<!--=================================
product -->

<!--=================================
deal-banner -->

<section class="shop-block page-section-ptb bg-overlay-black-40 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/shop/bg/05.jpg);">
 <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 text-center pt-50 pb-50">
     <h2 class="text-white">Women’s lookbook </h2>
       <p class="text-white mt-20 mb-30">Best Watches available on the cheapest prices at Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        <a class="button white button-border" href="#">Shop Now </a>
        <a class="button white ml-10" href="#">Get deale</a>
    </div>
   </div>
 </div>
</section>

<!--=================================
deal-banner -->

<!--=================================
product -->

<section class="shop-06-product page-section-ptb">
   <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h2 class="title-effect">Featured products</h2>
          </div>
       </div>
    </div>
      <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">
         <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/01.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">add to cart</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Product name</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
            </div>
         </div>
       </div>
       <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/02.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">add to cart</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Product name</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
            </div>
         </div>
        </div>
        <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/03.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">add to cart</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Product name</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
            </div>
         </div>
        </div>
        <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/04.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">add to cart</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Product name</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
             </div>
            </div>
         </div>
         <div class="item">
         <div class="product">
             <div class="product-image">
                 <img class="img-fluid mx-auto" src="web/images/shop/05.jpg" alt="">
                 <div class="product-overlay">
                   <div class="add-to-cart">
                      <a href="shop-single.html">add to cart</a>
                   </div>
                 </div>
              </div>
              <div class="product-des">
                 <div class="product-title">
                   <a class="text-black" href="shop-single.html">Product name</a>
                 </div>
              <div class="product-price">
                    <del>$24.99</del> <ins>$12.49</ins>
                 </div>
             </div>
            </div>
         </div>
        </div>
       </div>
      </div>
     </div>
</section>

<!--=================================
product -->


<!--=================================
blog -->

<section class="shop-06-product page-section-pb">
   <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h2 class="title-effect">Latest Articles</h2>
          </div>
       </div>
    </div>
      <div class="row">
         <div class="col-md-4 col-sm-4 xs-mb-30">
          <div class="blog blog-simple text-left">
             <div class="blog-image">
                  <img class="img-fluid" src="web/images/shop/blog/01.jpg" alt="">
               </div>
               <div class="blog-name mt-20">
                <h4 class="mt-15"><a href="#">Does your life lack meaning</a></h4>
              <div class="admin">
                   <span>By adimn / <a href="#">Business</a></span>
                 </div>
              </div>
           </div>
       </div>
       <div class="col-md-4 col-sm-4 xs-mb-30">
         <div class="blog blog-simple text-left">
             <div class="blog-image">
                  <img class="img-fluid" src="web/images/shop/blog/02.jpg" alt="">
               </div>
               <div class="blog-name mt-20">
                <h4 class="mt-15"><a href="#">Supercharge your motivation</a></h4>
              <div class="admin">
                   <span>By adimn / <a href="#">Business</a></span>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-4 col-sm-4">
         <div class="blog blog-simple text-left">
             <div class="blog-image">
                  <img class="img-fluid" src="web/images/shop/blog/03.jpg" alt="">
               </div>
               <div class="blog-name mt-20">
                <h4 class="mt-15"><a href="#">Helen keller a teller seller</a></h4>
              <div class="admin">
                   <span>By adimn / <a href="#">Business</a></span>
                 </div>
              </div>
           </div>
        </div>
      </div>
     </div>
</section>
  @include('seccion.footer')