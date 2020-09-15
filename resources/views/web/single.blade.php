@extends('farmacia.esqueleto')
  @include('seccion.header2')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(web/images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Detalles de compra</h1>
          <p>Descripción</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>Inicio</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Tienda</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Detalles de compra</span> </li>
       </ul>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
shop -->

  <section class="shop-single page-section-ptb">
    <div class="container">
      <div class="row">
         <div class="col-lg-9">
         <div class="row">
           <div class="col-lg-6">
             <div class="slider-slick">
              <div class="slider slider-for detail-big-car-gallery">
                    <img class="img-fluid" src="web/images/shop/detail/big/01.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/big/02.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/big/03.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/big/04.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/big/05.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/big/06.jpg" alt="">
                </div>
                <div class="slider slider-nav">
                    <img class="img-fluid" src="web/images/shop/detail/thum/01.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/thum/02.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/thum/03.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/thum/04.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/thum/05.jpg" alt="">
                    <img class="img-fluid" src="web/images/shop/detail/thum/06.jpg" alt="">
                </div>
             </div>
           </div>
           <div class="col-lg-6">
             <div class="product-detail clearfix">
              <div class="product-detail-title mb-20 sm-mt-40">
                  <h4 class="mb-10">Nombre del producto</h4>
                  <span>Consectetur lorem ipsum dolor sit amet, adipisicing elit. Accusamus officiis pariatur optio nobis culpa magni labor!  </span>
              </div>
              <div class="clearfix mb-30">
                <div class="product-detail-price"><del>$39.99</del> <ins>$24.99</ins></div>
                  <div class="product-detail-rating float-right">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
                </div>
             </div>
              <div class="product-detail-quantity clearfix mb-40">
                <div class="input-group">
                      <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                  </div>
                  <div class="product-detail add-to-cart">
                      <a class="button small" href="#">añadir al carrito</a>
                  </div>
                </div>
                <div class="product-detail-des mb-30">
                     <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sequi illo dignissimos sint rerum omnis laudantium ratione hic neque incidunt nam suscipit expedita sapiente atque, voluptas dicta. Dolorem, repudiandae, nobis.</p>
                   <ul class="list list-unstyled list-arrow">
                     <li>Detalles</li>
                     <li>Detalles</li>
                     <li>Detalles</li>
                  </ul>
             </div>
             <div class="product-detail-meta">
                 <span>SKU: 8465415 </span>
                 <span>Categoría: <a href="#">"producto"</a>  </span>
                 <span>Tags: <a href="#">Shoes,</a> <a href="#">T-Shirt,</a> <a href="#">Shirt</a>  </span>
             </div>
             <div class="product-detail-social">
                <span>Compartir:</span>
                 <ul class="list-style-none">
                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-envelope-o"></i> </a></li>
                 </ul>
             </div>
          </div>
         </div>
         <div class="col-lg-12 col-md-12">

          <div class="tab tab-border mt-50">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="additional-tab" data-toggle="tab" href="#additional" role="tab" aria-controls="additional" aria-selected="false">Perfil </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Portafolio </a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
              <h6>Título</h6>
                 <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quis corporis eligendi facere qui non quisquam veniam natus tenetur hic labore assumenda sit ducimus culpa laborum, iusto sunt voluptate impedit.</p>

                  <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quis corporis eligendi facere qui non quisquam veniam natus tenetur hic labore assumenda sit ducimus culpa laborum, iusto sunt voluptate impedit.</p>

                  <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quis corporis eligendi facere qui non quisquam veniam natus tenetur hic labore assumenda sit ducimus culpa laborum, iusto sunt voluptate impedit.</p>

                  <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quis corporis eligendi facere qui non quisquam veniam natus tenetur hic labore assumenda sit ducimus culpa laborum, iusto sunt voluptate impedit.</p>
            </div>
            <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
              <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row"> Air Conditioning</th>
                        <td>Mark</td>
                      </tr>
                      <tr>
                        <th scope="row"> Alloy Wheels</th>
                        <td>Jacob</td>
                      </tr>
                      <tr>
                        <th scope="row"> Anti-Lock Brakes (ABS)</th>
                        <td>Larry</td>
                      </tr>
                      <tr>
                        <th scope="row"> Anti-Theft</th>
                        <td>Larry</td>
                      </tr>
                      <tr>
                        <th scope="row">Anti-Starter</th>
                        <td>Larry</td>
                      </tr>
                      <tr>
                        <th scope="row">Alloy Wheels</th>
                        <td>Larry</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="blog-comments mt-40">
                        <div class="comments-1">
                            <div class="comments-photo">
                                <img src="web/images/team/08.jpg" alt="">
                            </div>
                            <div class="comments-info">
                                <h6> Michael Bean <span>Sep 15, 2018</span></h6>
                                <div class="port-post-social float-right">
                                    <a href="#">Reply</a>
                                </div>
                                <p class="mt-10">Imagine you are 10 years into the future but this time it’s different. Why? Because starting today you actually begin making changes in your life. Specific intentional changes are not easy.</p>
                            </div>
                        </div>
                        <div class="comments-1">
                            <div class="comments-photo">
                                <img src="web/images/team/08.jpg" alt="">
                            </div>
                            <div class="comments-info">
                                <h6> Joana Williams <span>Oct 02, 2018</span></h6>
                                <div class="port-post-social float-right">
                                    <a href="#">Reply</a>
                                </div>
                                <p class="mt-10">This is the path of a different choice, a different decision. You have the freedom to be how you want to be. Absorb all you need from this moment in your future and the positive things that you can learn consciously and unconsciously and then drift and float back to the place where the path splits. </p>
                            </div>
                        </div>
                        <div class="comments review-button text-right">
                            <a class="button" href="#">add a review</a>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
           </div>

         <div class="col-lg-12 col-md-12">
            <div class="title mt-30 mb-30">
                <h6>Related Products</h6>
            </div>
            <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="3" data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2" data-autoplay="false">
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
                       <a href="shop-single.html">Nombre del producto</a>
                     </div>
                     <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
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
                       <a href="shop-single.html">Nombre del producto</a>
                     </div>
                     <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
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
                       <a href="shop-single.html">Nombre del producto</a>
                     </div>
                     <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
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
                       <a href="shop-single.html">Nombre del producto</a>
                     </div>
                     <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <i class="fa fa-star-o"></i>
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
       <div class="col-lg-3">
           <div class="sidebar-widgets-wrap">
               <div class="sidebar-widget mb-40">
                   <h5 class="mb-20">Search</h5>
                     <div class="widget-search">
                     <i class="fa fa-search"></i>
                     <input type="search" class="form-control placeholder" placeholder="Search....">
                   </div>
                 </div>
                <div class="sidebar-widget mb-40">
                <h5 class="mb-20">Categories</h5>
                    <div class="widget-link">
                        <ul>
                            <li> <a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Nombre del producto </a></li>
                            <li> <a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Nombre del producto </a> </li>
                            <li> <a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Nombre del producto (10) </a> </li>
                            <li> <a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Nombre del producto </a> </li>
                            <li> <a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Nombre del producto (20) </a> </li>
                        </ul>
                    </div>
                 </div>
               <div class="sidebar-widget mb-40">
                <h5 class="mb-20">Recent items</h5>
                 <div class="recent-item clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/01.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                  <div class="recent-item clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/02.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                  <div class="recent-item clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/03.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                </div>
                <div class="sidebar-widget mb-0">
                <h5 class="mb-20">Popular items</h5>
                 <div class="recent-item clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/08.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                  <div class="recent-item clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/09.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                  <div class="recent-item clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/10.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                  <div class="recent-item mb-0 clearfix">
                    <div class="recent-image">
                        <a href="shop-single.html"><img class="img-fluid" src="web/images/shop/11.jpg" alt=""></a>
                    </div>
                    <div class="recent-info">
                        <div class="recent-title">
                             <a href="shop-single.html">Nombre del producto</a>
                        </div>
                        <div class="recent-meta">
                           <ul class="list-style-unstyled">
                            <li class="color">$29.99 /</li>
                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                        </ul>
                       </div>
                      </div>
                  </div>
                </div>
       <div class="sidebar-widget">
         <h5 class="mt-40 mb-20">bOLETÍN INFORMATIVO</h5>
          <div class="widget-newsletter">
          <div class="newsletter-icon">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="newsletter-content">
            <i>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Animi beatae, ducimus aliquam accusantium omnis, a ipsa nesciunt quo cum? Nisi sunt hic molestiae aliquid, quas est sequi laboriosam dignissimos, debitis. </i>
          </div>
          <div class="newsletter-form mt-20">
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Texto">
              </div>
             <a class="button btn-block" href="#">Enviar</a>
          </div>
        </div>
       </div>
        <div class="sidebar-widget">
         <h5 class="mt-40 mb-20">Nuestros clientes</h5>
          <div class="widget-clients">
            <div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
              <div class="item">
                <img class="img-fluid mx-auto" src="web/images/clients/01.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid mx-auto" src="web/images/clients/02.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid mx-auto" src="web/images/clients/03.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid mx-auto" src="web/images/clients/04.png" alt="">
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
shop -->

<!--=================================
action box- -->
    @include('seccion.webseter')
    @include('seccion.footer')