@extends('admin.master')
@section('tieudetrangadmin')
Quản lý blog
@endsection
@section('contentadmin')
<div class="card">

          <div class="twothirds">
            <form action="/admin-blog-danhsach/them" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
   

                <label class="control-label mb-1">Tên blog:</label>
                <input  class="form-control input-width" type="text" name="nameblog"    />
                <div class="form-group">
                                <p><label>Chọn loại blog </label></p>
                                <select class="form-control input-width subcatefield" name="namecate" >
                                    <option value="1">Chuyện bếp</option>
                                    <option value="2">Mẹo vặt</option>
                                   
            
                                </select>
                        </div>
                <label class="control-label mb-1">Ảnh giới thiệu:</label>
                <input  class="form-control input-width" Value="" type="file" name="anhmota"/>
           
                <label class="control-label mb-1">Mô tả:</label>
                <textarea name="mota" id="" cols="20" rows="10">
                </textarea>
                <label class="control-label mb-1">Chi tiết:</label>
                <textarea name="chitiet" id="demo" cols="100" rows="10">
                               
                </textarea>
                <script>
                    CKEDITOR.replace('demo', {
                        language: 'vi',
                        filebrowserBrowseUrl: 'public/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: 'public/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl: 'public/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
                    </script>
           
           
               
                    
                <input type="submit" value="Thêm" />

            </form>

        </div>



</div>

@endsection

