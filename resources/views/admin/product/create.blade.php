@extends('admin.layout.app')

@section('content')
  <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sản Phẩm</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h4>
              </div>
              <div class="card-body">
                <form action="{{ route('admin.product.postCreate') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <label for="category_id">Danh mục</label>
                      <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $cate)
                          <option value="{{$cate->id}}">{{ $cate->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" name="name" id="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="avatar">Ảnh</label>
                    <input type="file" class="form-control py-1 px-2" name="image" id="image" onchange="readURL(this);" >
                    <img src="http://placehold.it/180" alt="" class="avatar-upload mt-2" id="blah" style="max-width: 180px">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="price">Giá gốc</label>
                      <input type="number" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="sale">Giá khuyến mại</label>
                      <input type="number" class="form-control" name="priceSale" id="priceSale">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="desc">Mô tả</label>
                    <textarea class="form-control" name="desc" id="desc" rows="7"></textarea>
                  </div>
                  <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
            
        </div>
        <!-- /.container-fluid -->
@endsection

@section('script')
  <script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

  </script>
@endsection