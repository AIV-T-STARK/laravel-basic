<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bài 3 | Nguyễn Gia Hào</title>
  <link rel="shortcut icon" href="{{ asset('asset/user/image/favicon.ico') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


  <link rel="stylesheet" href="{{ asset('asset/user/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/user/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/user/css/app.css') }}">

</head>

<body>
<div class="header">
  <div class="top-header bg-black">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="top-header-menu">
            <li><a href="#">My Account</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">My Cart</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>
        <div class="col-12">
          <div class="row big-gutters">
            <div class="col-lg-left">
              <a href="index.html" class="logo">
                <img src="{{ asset('asset/user/image/logo.png') }}" alt="logo" class="image-responsive">
              </a>
            </div>
            <div class="col-lg-right">
              <div class="col-left-left">
                <div class="seach-wp">
                  <div class="seach">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fas fa-search"></i></button>
                  </div>
                </div>
                <div class="cart">
                  <div class="cart-icon">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  </div>
                  <div class="cart-desc">
                    <p class="total">TOTAL</p>
                    <p class="text-bold">$600.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-header bg-red">
    <div class="container">
      <nav class="bottom-header-navbar">
        <button class="title"><i class="fas fa-list-ul"></i>Categoryal</button>
        <button class="click-menu"><i class="fas fa-th"></i></button>
        <ul class="">
          <li><a href="#">Clothing</a></li>
          <li><a href="#">Electronics hot</a></li>
          <li><a href="#">Health & Beauty</a></li>
          <li><a href="#">Watches</a></li>
          <li><a href="#">Jewellery</a></li>
          <li><a href="#">Shoes</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<div class="main">
  <div class="container">
    <div class="row big-gutters mb-7" id="top-header-wrapper">
      <div class="col-lg-left d-lg-block">
        <div class="category bg-white box-shadow">
          <div class="category-content">
            <ul id="menu-category">
              <li><a href="#"><i class="far fa-play-circle"></i>Clothing</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Electronics</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Shoes</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Watches</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Jewellery</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Health and Beauty</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Health and Beauty</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Electronics</a></li>
              <li><a href="#"><i class="far fa-play-circle"></i>Health and Beauty</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-right">
        @yield('content-top')
      </div>
    </div>

    @yield('content-bottom')
  </div>
</div>
</div>

<div class="footer">
  <div class="top-footer bg-red">
    <div class="container">
      <div class="row top-footer-content">
        <div class="col-4 col-sm-2">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="{{asset('asset/user/image/icon1.png')}}" alt="icon" class="img-responsive">
            </a>
          </div>

        </div>
        <div class="col-4 col-sm-2">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="{{asset('asset/user/image/icon2.png')}}" alt="icon" class="img-responsive">
            </a>
          </div>

        </div>
        <div class="col-4 col-sm-2">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="{{asset('asset/user/image/icon3.png')}}" alt="icon" class="img-responsive">
            </a>
          </div>

        </div>
        <div class="col-4 col-sm-2">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="{{asset('asset/user/image/icon4.png')}}" alt="icon" class="img-responsive">
            </a>
          </div>

        </div>
        <div class="col-4 col-sm-2">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="{{asset('asset/user/image/icon3.png')}}" alt="icon" class="img-responsive">
            </a>
          </div>

        </div>
        <div class="col-4 col-sm-2">
          <div class="d-flex align-items-center">
            <a href="#">
              <img src="{{asset('asset/user/image/icon1.png')}}" alt="icon" class="img-responsive">
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="mid-footer text-gray-3">
    <div class="container">
      <div class="row mid-footer-content big-gutters">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <a href="#" class="logo">
            <img src="{{asset('asset/user/image/logo.png')}}" alt="logo" class="img-responsive">
          </a>
          <br>
          <p class="desc-logo">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh velit it’s a cold world out
            there.</p>
          <br>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i>0123 Main Road, Your City, NY 123456</li>
            <li><i class="fas fa-phone"></i>(000) 2345 - 6789</li>
            <li><i class="fas fa-envelope"></i>info@psdfreebies.com</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mid-footer-item">
          <h1 class="title">Information</h1>
          <br>
          <ul>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Privacy & Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Shipping & Delivery</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mid-footer-item">
          <h1 class="title">Our Social</h1>
          <br>
          <div class="row small-gutters">
            <div class="col-6">
              <ul>
                <li><a href="#"><i class="fab fa-google-plus-g"></i>Google+</a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
                <li><a href="#"><i class="fab fa-vimeo-v"></i>Vimeo</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
              </ul>
            </div>
            <div class="col-6">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="#"><i class="fas fa-rss"></i>RSS</a></li>
                <li><a href="#"><i class="fab fa-youtube"></i>YouTube</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mid-footer-item">
          <div class="row">
            <div class="col-12">
              <h1 class="title">Opening Time</h1>
              <br>
              <ul>
                <li>
                  <i class="far fa-clock"></i>
                  Monday - Friday: 08:30 am - 09:30 pm
              </ul>
            </div>
            <div class="col-12 mt-6">
              <h1 class="title">Payment Option</h1>
              <br>
              <div class="row cc">
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-mastercard"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-discover"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-amex"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-visa"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-stripe"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-diners-club"></i>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#">
                    <i class="fab fa-cc-jcb"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer bg-black">
    <div class="container">
      <ul>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Searchs</a></li>
        <li><a href="#">Searchs</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Advance</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <p class="coryright">© 2016 PSDFreebies.com <span>|</span> All Rights Reserved.</p>
    </div>
  </div>
</div>


<script src="{{ asset('asset/user/js/app.js') }}"></script>

@yield('script')
</body>

</html>