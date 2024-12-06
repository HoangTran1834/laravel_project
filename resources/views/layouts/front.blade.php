<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TopZone</title>
    <link rel="icon" type="image/png" sizes="96x96" href="/public/assets/img/logo/android-icon-96x96.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/android-icon-96x96.png">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/animate.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/themify-icons.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/icofont.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/jquery-ui.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/bundle.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/style.css" type='text/css'>
    <link rel="stylesheet" href="/assets/css/responsive.css" type='text/css'>
    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    --}}

    @livewireStyles

    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <header>
        <div class="header-top-wrapper-2 border-bottom-2" ">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info text-white" >
                <ul>
                        @if (auth()->guard('web')->user() && auth()->guard('web')->user()->role_id == 2)
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('shops.create') }} style="color: #fff;"">Seller Channel</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('seller.orders.index') }}">Your Shop</a>
                        </li>
                        @endif
                       

                    </ul>
                </div>
                <div class="electronics-login-register">
                    <ul>
                      
                        <!-- <li><a href="#"><i class="pe-7s-users"></i>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</a></li> -->
                        @auth
                        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="pe-7s-users"></i>{{ Auth::check() ? Auth::user()->name : 'Guest' }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="{{ route('customer.order') }}">Purchase order</a>
  <form action="{{ url('/logout') }}" method="POST" class="dropdown-item">
        @csrf
        <button type="submit" style="background: none; border: none; cursor: pointer; padding: 0; color: inherit; text-align: left;">
            Logout
        </button>
    </form>
   

  </div>
</div>

                       
                        @else

                        <li>
                            <a href="{{url('/login')}}">Login</a>
                        </li>
                        <li>
                            <a href="{{url('/register')}}">Sign Up</a>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>

            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="{{route('home')}}">
                        <img src="/assets/img/logo/logo.png" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">

                    <div class="categories-wrapper" >
                        <form action="{{route('products.search')}}" method="GET" >
                            <input name="query" placeholder="Sale off 12/12" type="text">
                            <button type="submit"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
 </button>
                        </form>
                    </div>
                </div>
                <form action="{{ route('customer.order') }}" method="GET">
                <div class="trace-cart-wrapper">
                    
                    </form>
                        <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href="{{ route('cart.index') }}"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text" >
                            <a href="{{ route('cart.index') }}" style=" color:red;font-size:14px; 
                            position: absolute; right:80px;top:35px; "> <br>
                                @auth
                                {{Cart::session(auth()->id())->getContent()->count()}}
                                @else
                                0
                                @endauth
                                </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
               
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none" style="background:#0A5EB0">
                    <div class="mobile-menu" style="background:#0A5EB0">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    @if(session('message'))

    <div class="alert alert-success text-center" role="alert">
        <strong>{{ session('message') }}</strong>
    </div>
    @endif

    @if(session('error'))

    <div class="alert alert-danger text-center" role="alert">
        <strong>{{session('error')}} </strong>
    </div>
    @endif


    @yield('content')
    
    <br>
    <br>


    <!-- Footer -->
<footer class="text-center  text-lg-start bg-body-tertiary text-muted">
<div class="footer-bottom pt-25 pb-30" style="background: #0A5EB0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-menu">
                            <div class="me-5 d-none d-lg-block" style="color:white">
                                <span>Get connected with us on social networks:</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
  
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <img src="/assets/img/logo/logo.png" alt="">
          </h6>
          <p>
          TopZone is the result of close cooperation between Apple and Mobile World. 
          TopZone brings to the large iFan community a space for a classy shopping experience with an upgraded 
          official authorized store version and the latest org update brought to Vietnam.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          Service
          </h6>
          <p>
            <a href="#!" class="text-reset">Product Service

          </p>
          <p>
            <a href="#!" class="text-reset">Payment Service</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Discount Service</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Shopping Service</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> 48 Cao Thang st.,
          Hai Chau, Da Nang city</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            finalteam@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i>  +086 86 86 868</p>
          <p><i class="fas fa-print me-3"></i>  +086 86 86 868</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2025 Copyright:
    <a class="text-reset fw-bold" href="#"> finalteam.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="/assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4>
                                        </td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has beenin the stand ard dummy text ever since the
                                                1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4>
                                        </td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight </h4>
                                        </td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions </h4>
                                        </td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand </h4>
                                        </td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color </h4>
                                        </td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size </h4>
                                        </td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="/assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00 </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et
                                dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- chat box -->
<div id="chat-box" class="chat-box hidden">
    <div class="chat-header">
        <div class="chat-header-icon">
            <div class="user-icon"></div>
            <span>Username</span>
        </div>
        <button id="close-chat" class="close-btn">&times;</button>
    </div>
    <div class="chat-body">
        <div class="message user-message">Hello</div>
        <div class="message my-message">Hi!</div>
    </div>
    <div class="chat-footer">
        <input type="text" placeholder="Enter your text..." />
        <button class="send-btn">Send</button>
    </div>
</div>
<div id="chat-toggle" class="chat-toggle">
<span id="bling" class="bling hidden"></span>

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg>

</div>
<style>
  
.chat-box {
    position: fixed;
    top: 160px;
    right: 80px;
    width: 300px;
    height: 350px;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s;
    z-index: 999;
}

.hidden {
    transform: translateY(200%);
}

.chat-header {
    background-color: #4285f4;
    color: white;
    padding: 10px;
    border-radius: 10px 10px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chat-header-icon {
    display: flex;
    align-items: center;
}

.user-icon {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #4caf50;
    margin-right: 10px;
}

.close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

.chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
}

.message {
    margin-bottom: 10px;
    padding: 8px;
    border-radius: 5px;
}

.user-message {
    background: #e0e0e0;
    align-self: start;
    margin-right: 60px;
}

.my-message {
    background: #4285f4;
    color: white;
    align-self: end;
    margin-left: 60px;
}

.chat-footer {
    display: flex;
    padding: 10px;
    border-top: 1px solid #ccc;
}

.chat-footer input {
    flex: 1;
    border: none;
    padding: 8px;
    border-radius: 5px;
    margin-right: 10px;
    background: #f0f0f0;
}

.send-btn {
    background: #4285f4;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 12px;
    cursor: pointer;
}

.chat-toggle {
    position: fixed;
    bottom: 220px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: white;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.chat-icon {
    font-size: 24px;
}


</style>


    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/boxchat.js"></script>

    @livewireScripts
</body>

</html>