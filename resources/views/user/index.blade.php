@extends('user.layout.app')

@section('content-top')
  <div class="hero-banner">
    <div class="banner-wrapper">
      <div class="banner-top" style="background: url({{ asset('asset/user/image/banner1.png') }});">
        <div class="banner-top-content text-white">
          <h1 class="display-2 text-blue">COLLECTION 2016</h1>
          <h1 class="display-1">SAVE 50% FOR</h1>
          <h1 class="display-3">FIRST PURCHASE</h1>
          <a href="#" class="btn btn-outline">SHOP NOW</a>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-bottom text-white text-center bg-red">
    <div class="row no-gutters">
      <div class="banner-desc col-4">
        <a href="#">
          <p class="title">money back</p>
          <p class="desc">30 Days Money Back Guarantee </p>
        </a>
      </div>
      <div class="banner-desc col-4">
        <a href="#">
          <p class="title">free shipping</p>
          <p class="desc">Shipping on orders over $99</p>
        </a>
      </div>
      <div class="banner-desc col-4">
        <a href="#">
          <p class="title">Special Sale</p>
          <p class="desc">Extra $5 off on all items</p>
        </a>
      </div>
    </div>
  </div>
@endsection

@section('content-bottom')
  <div class="row big-gutters mb-7">
    <div class="col-lg-left deals">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-12 mb-7" id="hot-deals">
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <p class="card-title">
                  Hot deal
                </p>

              </div>
              <div class="card-products owl-carousel slide-product-1">
                <div class="product">
                  <a href="#">
                    <div class="card-img">
                      <img src="https://picsum.photos/200/300" alt="product1" class="img-responsive">
                    </div>
                    <div class="card-desc">
                      <p>Lorem, ipsum dolorrrrrrr.</p>
                      <p><span class="price-die">$188.8</span><span class="price">$99.9</span></p>
                      <p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </p>
                    </div>
                  </a>
                </div>
                <div class="product">
                  <a href="#">
                    <div class="card-img">
                      <img src="https://picsum.photos/200/300" alt="product1" class="img-responsive">
                    </div>
                    <div class="card-desc">
                      <p>Lorem, ipsum dolorrrrrrr.</p>
                      <p><span class="price-die">$188.8</span><span class="price">$99.9</span></p>
                      <p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-12 mb-7" id="special-deal">
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <p class="card-title">
                  Special Deal
                </p>
              </div>
              <div class="card-products owl-carousel slide-product-1">
                <div class="product">
                  <a href="#">
                    <div class="card-img">
                      <img src="https://picsum.photos/200/300" alt="product1" class="img-responsive">
                    </div>
                    <div class="card-desc">
                      <p>Lorem, ipsum dolorrrrrrr.</p>
                      <p><span class="price-die">$188.8</span><span class="price">$99.9</span></p>
                      <p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </p>
                    </div>
                  </a>
                </div>
                <div class="product">
                  <a href="#">
                    <div class="card-img">
                      <img src="https://picsum.photos/200/300" alt="product1" class="img-responsive">
                    </div>
                    <div class="card-desc">
                      <p>Lorem, ipsum dolorrrrrrr.</p>
                      <p><span class="price-die">$188.8</span><span class="price">$99.9</span></p>
                      <p>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 mb-7" id="news-letters">
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <p class="card-title">
                  Newsletters
                </p>
              </div>
              <div class="card-desc">
                <form action="#">
                  <label for="newsleters">Sign Up for Our Newsletter!</label>
                  <input type="text" class="form-control" id="newsleters" name="newsleters">
                  <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-12">
          <div class="box-shadow">
            <img src="{{asset('asset/user/image/ad.png')}}" alt="ad" class="img-responsive width-100">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-right product">
      <div class="row">
        <div class="col-12 mb-7" id="new-products">
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <p class="card-title">
                  New products
                </p>
              </div>
              <div class="card-products">
                <div class="card-products owl-carousel slide-product-2">
                  @foreach($products as $product)
                    <div class="product">
                      <a href="{{ route('user.getProduct', ['slug' => $product->slug]) }}">
                        <div class="card-img">
                          <img src="{{ url($product->image) }}" alt="{{ $product->name }}" class="img-responsive">
                        </div>
                        <div class="card-desc">
                          <p>{{ $product->name }}</p>
                          <p><span class="price-die">${{ $product->price }}</span><span class="price">${{ $product->priceSale }}</span></p>
                          <p>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                        </div>
                      </a>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-7" id="banner-sale">
          <div class="row big-gutters">
            <div class="col-12 col-md-6 banner-sale">
              <div class="row no-gutters box-shadow">
                <div class="col-7 banner-sale-img" style="background-image:url({{asset('asset/user/image/category1.png')}})">
                  <div class="banner-sale-imgg"></div>
                </div>
                <div class="col-5 bg-white ">
                  <div class="banner-sale-desc">
                    <h1 class="display-2 text-gray-3">
                      201<span style="font-size: 44px;">6</span>
                    </h1>
                    <h2>Fashion sale</h2>

                    <a href="#">BUY NOW</a>
                    <p class="text-gray-3">Lorem ipsum dolor sit.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6  banner-sale">
              <div class="row no-gutters box-shadow">
                <div class="col-7 banner-sale-img" style="background-image:url({{asset('asset/user/image/category2.png')}})">
                  <div class="banner-sale-imgg"></div>
                </div>
                <div class="col-5 bg-white">
                  <div class="banner-sale-desc">
                    <h1 class="display-2 text-gray-3">
                      201<span style="font-size: 44px;">6</span>
                    </h1>
                    <h2>Fashion sale</h2>

                    <a href="#">BUY NOW</a>
                    <p class="text-gray-3">Lorem ipsum dolor sit.</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-7" id="latest-products">
          <div class="card" id="slide-product-4">
            <div class="card-body">
              <div class="card-header">
                <p class="card-title">
                  Latest products
                </p>
                <ul class="card-menu">
                  @foreach($categories as $cate)
                    <li><a href="{{ route('user.getProductOfCategory', ['slug' => $cate->slug]) }}">{{$cate->name}}</a></li>
                    @endforeach
                </ul>
              </div>
              <div class="card-products">
                <div class="card-products owl-carousel slide-product-2">
                  {{--////////--}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-7 mid-banner">
          <div class="row no-gutters bg-white box-shadow py-2">
            <div class="col-12 col-md-7">
              <img src="{{asset('asset/user/image/banner2.png')}}" alt="banner2" class="img-responsive">
            </div>
            <div class="col-12 col-md-5">
              <div class="mid-banner-content">
                <h1 class="display-24px">Beautiful Laptop</h1>
                <h1 class="display-24px text-blue">Retina Display 18” Ready !</h1>
                <a href="#" class="btn btn-primary">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
  <script src="{{ asset('asset/user/js/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/user/js/owl.carousel.min.js') }}"></script>


  <script>
      $(document).ready(function(){
          $(".slide-product-1").owlCarousel({
              loop:true,
              margin:10,
              nav:true,
              navText: ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
              dots:false,
              items:1
          });

          $(".slide-product-2").owlCarousel({
              loop:true,
              margin:10,
              nav:true,
              navText: ["<i class='fas fa-caret-left'></i>","<i class='fas fa-caret-right'></i>"],
              dots:false,
              responsive: {
                  0: {
                      items: 1
                  },
                  576: {
                      items: 2
                  },
                  768: {
                      items: 2,
                      margin: 40
                  },
                  992: {
                      items: 4
                  }
              }
          });
      });
  </script>
  @endsection