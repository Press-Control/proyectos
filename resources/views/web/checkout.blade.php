@extends('farmacia.esqueleto')
  @include('seccion.header2')
  <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(web/images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Pagos</h1>
          <p>Descripción</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Shop</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Shop checkout </span> </li>
       </ul>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->
<!--=================================
checkout -->

  <section class="checkout-page page-section-ptb">
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6">
            <h2 class="mb-20">Facturación</h2>
            <div class="section-field mb-30">
               <label class="mb-10">Apellido * </label>
               <input id="name" type="text" placeholder="Apellido *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Nombre * </label>
               <input id="name" type="text" placeholder="Nombre *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Companía * </label>
               <input id="name" type="text" placeholder="Companía *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Región * </label>
               <div class="box">
                <select class="wide fancyselect mb-30">
                  <option value="1">Some option</option>
                  <option value="2">Another option</option>
                  <option value="3">A option</option>
                  <option value="4">Potato</option>
                </select>
              </div>
           </div>
            <div class="section-field mb-30">
               <label class="mb-10">Número de calle * </label>
               <input type="text" class="not-click form-control mb-10" placeholder="Calle 1" value="" name="s">
               <input type="text" class="not-click form-control" placeholder="Calle 2" value="" name="s">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Estado * </label>
               <div class="box">
                <select class="wide fancyselect mb-30">
                  <option value="1">Some option</option>
                  <option value="2">Another option</option>
                  <option value="3">A option</option>
                  <option value="4">Potato</option>
                </select>
              </div>
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Código postal * </label>
               <input id="name" type="text" placeholder="Postal" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Teléfono * </label>
              <input id="name" type="text" placeholder="Phone *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Email * </label>
              <input id="name" type="text" placeholder="Email *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">Crear cuenta?
                </label>
                </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <h2 class="mb-20">Comprar con otra dirección?</h2>
            <div class="section-field mb-30">
               <label class="mb-10">Apellido * </label>
               <input id="name" type="text" placeholder="Apellido *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Nombre * </label>
               <input id="name" type="text" placeholder="Nombre *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Companía * </label>
               <input id="name" type="text" placeholder="Companía *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Región * </label>
               <div class="box">
                <select class="wide fancyselect mb-30">
                  <option value="1">Some option</option>
                  <option value="2">Another option</option>
                  <option value="3">A option</option>
                  <option value="4">Potato</option>
                </select>
              </div>
           </div>
            <div class="section-field mb-30">
               <label class="mb-10">Número de calle * </label>
               <input type="text" class="not-click form-control mb-10" placeholder="Calle 1" value="" name="s">
               <input type="text" class="not-click form-control" placeholder="Calle 2" value="" name="s">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Estado * </label>
               <div class="box">
                <select class="wide fancyselect mb-30">
                  <option value="1">Some option</option>
                  <option value="2">Another option</option>
                  <option value="3">A option</option>
                  <option value="4">Potato</option>
                </select>
              </div>
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Código postal * </label>
               <input id="name" type="text" placeholder="Postal *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Notas * </label>
               <textarea class="form-control input-message" placeholder="Note" rows="7" name="message"></textarea>
           </div>
         </div>
       </div>
        <div class="row">
           <div class="col-md-6">
             <table class="table table-responsive">
                <thead>
                <tr>
                  <th>Producto</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><p>Challenge Battery Hammer Drill</p></td>
                    <td><p>$190.00</p></td>
                  </tr>
                  <tr>
                    <td><p>Power X Change Battery - 3.0 mAh</p></td>
                    <td><p>$34.00</p></td>
                  </tr>
                  <tr>
                    <td><p>Percussion Hammer Drill</p></td>
                    <td><p>$87.00</p></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                  <th>Subtotal</th>
                    <td>
                      <p>$87.00</p>
                    </td>
                </tr>
                <tr>
                   <th>Envío</th>
                  <td>
                    <div class="clearfix">
                       <label>
                        <input type="radio" name="total1"> <span>GRATIS</span>
                      </label>
                    </div>
                    <div class="clearfix">
                      <label>
                        <input type="radio" name="total1"> <span>Precio:</span>
                      </label>
                      <span> $10.00</span>
                    </div>
                  </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td><p class="price">$197.00</p></td>
                    </tr>
                </tfoot>
                </table>
           </div>
           <div class="col-md-6">
             <div class="clearfix">
              <label>
                <input type="radio" name="total2"> <span>Envío gratis</span>
              </label>
            </div>
            <div class="radio mb-30">
              <label>
                <input type="radio" name="total2"> <span>Precio: </span>
              </label>
              <span> $10.00</span>
            </div>
            <div class="section-field mb-30">
               <label class="mb-10">Nombre de la tarjeta * </label>
               <input id="name" type="text" placeholder="Name on Card *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Tipo de tarjeta * </label>
               <div class="box">
                <select class="wide fancyselect mb-30">
                  <option value="1">Type</option>
                  <option value="2">Another option</option>
                  <option value="3">A option</option>
                  <option value="4">Potato</option>
                </select>
              </div>
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Número de tarjeta *</label>
               <input id="name" type="text" placeholder="Credit Card Number *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Verficación*</label>
               <input id="name" type="text" placeholder="Card Verification Number*" class="form-control"  name="name">
           </div>
            <div class="gray-bg  pl-50 pr-50 pt-50 pb-50">
             <table class="mb-30">
                <tbody>
                  <tr>
                   <th class="pl-40"><h3>TOTAL:</h3> </th>
                   <td class="pl-40"><h3>$197.00</h3></td>
                   </tr>
                  </tbody>
                </table>
                 <a href="#" class="button btn-block">Comprar <span class="icon-action-redo"></span></a>
               </div>
           </div>
        </div>
    </div>
 </section>

<!--=================================
checkout -->


<!--=================================
action box- -->

<section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
       <div class="action-box-text">
        <h3><strong> Webster: </strong> La mejor tienda en línea</h3>
        <p>Descripción.</p>
      </div>
      <div class="action-box-button">
        <a class="button button-border white" href="#">
          <span>Purchase Now</span>
          <i class="fa fa-download"></i>
       </a>
     </div>
    </div>
  </div>
 </div>
</section>

  @include('seccion.footer')