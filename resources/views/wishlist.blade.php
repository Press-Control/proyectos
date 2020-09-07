@extends('farmacia.esqueleto')
  @include('seccion.header2')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Shop Wishlist</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Shop</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Shop </span> </li>
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
                      <th>Product</th>
                      <th>Product name</th>
                      <th>Price</th>
                      <th>Add to cart </th>
                      <th>Stock status </th>
                      <th>Close </th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                     <td class="image">
                         <a class="media-link" href="#"> <img class="img-fluid" src="images/shop/01.jpg" alt=""/></a>
                        </td>
                         <td class="description">
                          <a href="#">T-Shirt With Spliced All Over Print</a>
                         </td>
                          <td class="price">$90.00</td>
                          <td class="td-quentety">
                              <a class="button" href="#">Add to cart</a>
                            </td>
                           <td class="price price-2">In stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                         <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="images/shop/02.jpg" alt=""/></a>
                          </td>
                          <td class="description">
                              <a href="#">French Connection Tank</a>
                          </td>
                          <td class="price">$100.00</td>
                           <td class="td-quentety">
                              <a class="button" href="#">Add to cart</a>
                            </td>
                           <td class="price price-2">Out of stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                         <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="images/shop/03.jpg" alt=""/></a>
                          </td>
                          <td class="description">
                              <a href="#">T-Shirt With Spliced All Over Print</a>
                          </td>
                          <td class="price">$500.00</td>
                           <td class="td-quentety">
                              <a class="button" href="#">Add to cart</a>
                            </td>
                           <td class="price price-2">In stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                         <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="images/shop/04.jpg" alt=""/></a>
                          </td>
                          <td class="description">
                              <a href="#">French Connection Tank</a>
                          </td>
                          <td class="price">$40.00</td>
                           <td class="td-quentety">
                              <a class="button" href="#">Add to cart</a>
                            </td>
                           <td class="price price-2">In stock</td>
                          <td class="total">
                           <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                      <tr>
                       <td class="image">
                           <a class="media-link" href="#"> <img class="img-fluid" src="images/shop/05.jpg" alt=""/></a>
                          </td>
                           <td class="description">
                            <a href="#">T-Shirt With Spliced All Over Print</a>
                           </td>
                            <td class="price">$90.00</td>
                            <td class="td-quentety">
                                <a class="button" href="#">Add to cart</a>
                              </td>
                             <td class="price price-2">In stock</td>
                            <td class="total">
                             <a href="#"><i class="fa fa-close"></i></a>
                          </td>
                      </tr>
                  </tbody>
             </table>
          </div>
         </div>
       </div>
    </div>
 </section>

<!--=================================
shop -->


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