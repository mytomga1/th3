<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        QUẢN LÝ BANNER
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
        <li class="active">Banner</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Mới Banner</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="" enctype="multipart/form-data"> <!--enctype sử dụng để upload file -->
                    <div class="box-body">

                        <div class="form-group">
                            <label for="title">Tiêu Đề: </label>
                            <input name="title" class="form-control" id="title" placeholder="Nhập tiêu đề">
                        </div>

                        <div class="form-group">
                            <label for="image">Chọn hình ảnh: </label>
                            <input type="file" name="image" id="image">
                        </div>

                        <div class="form-group">
                            <label for="url">URL: </label>
                            <input name="url" class="form-control" id="url" placeholder="Nhập link">
                        </div>

                        <div class="form-group">
                            <label for="target">Chọn Target: </label>
                            <select id="target" name="target" class="form-control">
                                <option value="1">_blank</option>
                                <option value="0">_self</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Mô Tả</label>
                            <textarea id="description" name="description" class="form-control" rows="3"
                                      placeholder="Enter ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="type">Loại: </label>
                            <select id="type" name="type" class="form-control">
                                <option value="1">Cao Cấp</option>
                                <option value="2">Bình Dân</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="position">Vị trí Banner: </label>
                            <select id="position" name="position" class="form-control">
                                <option value="1">Banner bên phải</option>
                                <option value="2">Banner bên Trái</option>
                                <option value="3">Banner bên phía trên</option>
                                <option value="4">Banner bên phía dưới</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="is_active">Trạng Thái Kích Hoạt: </label>
                            <select id="is_active" name="is_active" class="form-control">
                                <option value="1">Kích Hoạt</option>
                                <option value="0">Tắt</option>
                            </select>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->