@extends('user.layout.app')

@section('content-top')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <p class="card-title">
          New products
        </p>
      </div>
      <div class="card-products">
        <div class="card-products row">
          @for($i = 0; $i < 7; $i++)
            <div class="col-sm-6 col-md-3 col-lg-4 product">
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
          @endfor
        </div>
      </div>
    </div>
  </div>
@endsection