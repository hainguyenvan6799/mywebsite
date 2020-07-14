@extends('admin.layout.index')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">dịch vụ
                            <small>Chỉnh sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('dichvu/postSua',['id'=>$dichvu->id])}}" method="POST" enctype="multipart/form-data" id="formSua">
                            {{csrf_field()}}
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif

                            @if(session('loi'))
                                <div class="alert alert-danger">
                                    {{session('loi')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Tên dịch vụ</label>
                                <input class="form-control" name="txtTen" placeholder="Nhập tên dịch vụ" value="{{$dichvu->tendichvu}}" required="" />
                            </div>

                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtGia" placeholder="Nhập giá dịch vụ" value="{{$dichvu->gia}}" required="" />
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="txtMota" class="form-control" value="{{$dichvu->mota}}"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file" name="filehinh" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-default">Chỉnh sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection

@section('script')
    <script type="text/javascript">
        var formSua = document.getElementById('formSua');
        var text = 'Bạn có chắc chắn muốn sửa thông tin loại dịch vụ này?';
        this.alertBox(formSua, text);
    </script>
@endsection