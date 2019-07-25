@extends('user.layout.app')

@section('content-top')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <p class="card-title">
          {{ $categoryName }}
        </p>
      </div>
      <div class="card-products">
        <div class="card-products row">
          @foreach($products as $product)
            <div class="col-sm-6 col-md-3 col-lg-4 product">
                <div class="card-img">
                  <img src="{{ url($product->image) }}" alt="{{ $product->name }}" class="img-responsive">
                </div>
                <div class="card-desc">
                  <p>{{ $product->name }}</p>
                  <p><span class="price-die">${{ $product->price }}</span><span class="price">${{ $product->price }}</span></p>
                  <p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </p>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection