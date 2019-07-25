@extends('user.layout.app')

@section('content-top')

  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <p class="card-title">
          {{ $product->name }}
        </p>
      </div>
        <div class="card-products row mt-5">
          <div class="col-md-5">
              <div class="card-img">
                <img src="{{ url('https://picsum.photos/200/300') }}" alt="{{ $product->name }}" class="img-responsive">
              </div>
          </div>
          <div class="col-md-7">
            <h2>Mô tả</h2>
            <hr>
            <p>
              {{ $product->desc }}
            </p>
            <h2 class="mt-5">Giá</h2>
            <hr>
            <h3 style="font-weight: 400"><del>${{ $product->price }}</del> <strong>${{ $product->priceSale }}</strong></h3>
            <div class="text-right mt-5">
              <a href="#" class="btn btn-primary">Mua ngay</a>
            </div>
          </div>
        </div>
    </div>
  </div>

  @endsection