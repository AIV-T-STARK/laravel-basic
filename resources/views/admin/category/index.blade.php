@extends('admin.layout.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh mục</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Thêm danh mục</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.category.postCreate')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Danh mục</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Tên danh mục</th>
                                <th>Số sản phẩm</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Tên danh mục</th>
                                <th>Số sản phẩm</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if (asset($categories))
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->product->count()}}</td>
                                        <td>
                                            <a href="{{ route('admin.category.getUpdate', ['id' => $category->id]) }}">Sửa</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.category.destroy', ['id' => $category->id]) }}">Xóa</a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('asset/admin/js/datatables/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('asset/admin/js/datatables/dataTables.bootstrap4.min.js') }} "></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection