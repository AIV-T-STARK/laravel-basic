@extends('user.layout.app')

@section('content-top')

  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <p class="card-title">
          Product ......
        </p>
      </div>
        <div class="card-products row mt-5">
          <div class="col-md-5">
            <a href="#">
              <div class="card-img">
                <img src="https://picsum.photos/200/300" alt="product1" class="img-responsive">
              </div>
            </a>
          </div>
          <div class="col-md-7">
            <h2>Mo Ta</h2>
            <hr>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab beatae consequuntur debitis delectus dolores est et fugiat, hic labore molestiae perspiciatis quae qui repellat sit suscipit tempora temporibus ut voluptate.
            </p>
            <h2 class="mt-5">Gia</h2>
            <hr>
            <h3>90000000</h3>
            <div class="text-right mt-5">
              <a href="#" class="btn btn-primary">Mua ngay</a>
            </div>
          </div>
        </div>
    </div>
  </div>

  @endsection