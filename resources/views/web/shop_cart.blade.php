@extends('farmacia.esqueleto')
  @include('seccion.header2')
  <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(web/images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Carrito</h1>
          <p>Descripción</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Inico</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Tienda</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Carrito</span> </li>
       </ul>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
shop -->

  <section class="wishlist-page page-section-ptb">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12">
           <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr>
                      <th>Producto</th>
                      <th>Nombre del producto</th>
                      <th>Precio</th>
                      <th>Cantidad </th>
                      <th>Stock </th>
                      <th>Quitar </th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                     <td class="image">
                         <a class="media-link" href="#"> <img class="img-fluid" src="web/images/shop/01.jpg" alt=""/></a>
                        </td>
                         <td class="description">
                          <a href="#">Producto X</a>
                         </td>
                          <td class="price">$90.00</td>
                          <td class="td-quentety">
                              <input type="number" value="1">
                            </td>
                           <td class="price price-2">En stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                         <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="web/images/shop/02.jpg" alt=""/></a>
                          </td>
                          <td class="description">
                              <a href="#">Producto X</a>
                          </td>
                          <td class="price">$100.00</td>
                           <td class="td-quentety">
                              <input type="number" value="3">
                            </td>
                           <td class="price price-2">Fuera de stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                         <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="web/images/shop/03.jpg" alt=""/></a>
                          </td>
                          <td class="description">
                              <a href="#">Producto X</a>
                          </td>
                          <td class="price">$500.00</td>
                           <td class="td-quentety">
                              <input type="number" value="2">
                            </td>
                           <td class="price price-2">En stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                         <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="web/images/shop/04.jpg" alt=""/></a>
                          </td>
                          <td class="description">
                              <a href="#">Producto X</a>
                          </td>
                          <td class="price">$40.00</td>
                           <td class="td-quentety">
                              <input type="number" value="4">
                            </td>
                           <td class="price price-2">En stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                       <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="web/images/shop/05.jpg" alt=""/></a>
                          </td>
                           <td class="description">
                            <a href="#">Producto X</a>
                           </td>
                            <td class="price">$90.00</td>
                            <td class="td-quentety">
                                <input type="number" value="5">
                              </td>
                             <td class="price price-2">En stock</td>
                            <td class="total">
                             <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                  </tbody>
             </table>
         </div>
       </div>
      </div>
      <div class="row mt-60">
        <div class="col-md-6">
           <h4>CÓDIGOS </h4>
           <p>Pon tu cupón :D</p>
           <div class="form-group">
              <input id="name" type="text" placeholder="Aplicar Cupón *" class="form-control" name="name">
              <a class="button mt-10" href="#">Aplicar cupón</a>
           </div>
        </div>
        <div class="col-md-6 float-right sm-mt-30">
          <table class="table table-dark text-right">
                  <tbody>
                    <tr>
                    <td>Subtotal</td>
                    <td>$241.00</td>
                  </tr>
                  <tr>
                    <td>Cúpon</td>
                    <td>$12.00</td>
                  </tr>
                  <tr class="total">
                    <td><b>Total </b></td>
                    <td><b>$229.00 </b></td>
                  </tr>
                </tbody>
              </table>
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