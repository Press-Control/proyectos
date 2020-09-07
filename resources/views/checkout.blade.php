@extends('farmacia.esqueleto')
  @include('seccion.header2')
  <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Shop checkout</h1>
          <p>We know the secret of your success</p>
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
            <h2 class="mb-20">Billing details</h2>
            <div class="section-field mb-30">
               <label class="mb-10">First name * </label>
               <input id="name" type="text" placeholder="First name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Last name * </label>
               <input id="name" type="text" placeholder="First name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Company name * </label>
               <input id="name" type="text" placeholder="Company name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Country * </label>
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
               <label class="mb-10">Street address * </label>
               <input type="text" class="not-click form-control mb-10" placeholder="Address 1" value="" name="s">
               <input type="text" class="not-click form-control" placeholder="Address 2" value="" name="s">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">State / County * </label>
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
               <label class="mb-10">Postcode / ZIP * </label>
               <input id="name" type="text" placeholder="First name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Phone * </label>
              <input id="name" type="text" placeholder="Phone *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Email address * </label>
              <input id="name" type="text" placeholder="Phone *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
            <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="">Create an account?
                </label>
                </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <h2 class="mb-20">Ship to a different address?</h2>
            <div class="section-field mb-30">
               <label class="mb-10">First name * </label>
               <input id="name" type="text" placeholder="First name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Last name * </label>
               <input id="name" type="text" placeholder="First name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Company name * </label>
               <input id="name" type="text" placeholder="Company name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Country * </label>
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
               <label class="mb-10">Street address * </label>
               <input type="text" class="not-click form-control mb-10" placeholder="Address 1" value="" name="s">
               <input type="text" class="not-click form-control" placeholder="Address 2" value="" name="s">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">State / County * </label>
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
               <label class="mb-10">Postcode / ZIP * </label>
               <input id="name" type="text" placeholder="First name *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Order notes * </label>
               <textarea class="form-control input-message" placeholder="Note" rows="7" name="message"></textarea>
           </div>
         </div>
       </div>
        <div class="row">
           <div class="col-md-6">
             <table class="table table-responsive">
                <thead>
                <tr>
                  <th>Product</th>
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
                   <th>Shipping</th>
                  <td>
                    <div class="clearfix">
                       <label>
                        <input type="radio" name="total1"> <span>Free Shipping</span>
                      </label>
                    </div>
                    <div class="clearfix">
                      <label>
                        <input type="radio" name="total1"> <span>Flat Rate:</span>
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
                <input type="radio" name="total2"> <span>Free Shipping</span>
              </label>
            </div>
            <div class="radio mb-30">
              <label>
                <input type="radio" name="total2"> <span>Flat Rate</span>
              </label>
              <span> $10.00</span>
            </div>
            <div class="section-field mb-30">
               <label class="mb-10">Name on Card * </label>
               <input id="name" type="text" placeholder="Name on Card *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Credit Card Type * </label>
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
               <label class="mb-10">Credit Card Number *</label>
               <input id="name" type="text" placeholder="Credit Card Number *" class="form-control"  name="name">
           </div>
           <div class="section-field mb-30">
               <label class="mb-10">Card Verification Number*</label>
               <input id="name" type="text" placeholder="Card Verification Number*" class="form-control"  name="name">
           </div>
            <div class="gray-bg  pl-50 pr-50 pt-50 pb-50">
             <table class="mb-30">
                <tbody>
                  <tr>
                   <th class="pl-40"><h3>GRAND TOTAL:</h3> </th>
                   <td class="pl-40"><h3>$197.00</h3></td>
                   </tr>
                  </tbody>
                </table>
                 <a href="#" class="button btn-block">Place Order Now <span class="icon-action-redo"></span></a>
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
        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
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