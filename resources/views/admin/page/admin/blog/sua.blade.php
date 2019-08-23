@extends('admin.master')
@section('tieudetrangadmin')
Quản lý blog
@endsection
@section('contentadmin')
<div class="card">
          <div class="twothirds">
            <form action="/admin-blog-danhsach/sua" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group"  >
                       <label class="control-label mb-1">ID</label>
                <input class="form-control input-width" type="text" name="id" value="{{$datablog[0]['id']}}" />
                    </div>
                <label class="control-label mb-1">Tên blog:</label>
                <input  class="form-control input-width" type="text" name="nameblog"   value="{{$datablog[0]['tieudeblog']}}" />
                <label class="control-label mb-1">Mô tả:</label>
                <textarea name="mota" id="" cols="200" rows="5">
                               {{$datablog[0]['mota']}}
                </textarea>
                <label class="control-label mb-1">Ảnh giới thiệu:</label>
                <input  class="form-control input-width" Value="" type="file" name="anhmota"/>
              <label class="control-label mb-1">Chi tiết:</label>
                <textarea name="chitiet" id="demo" cols="100" rows="10">
                                {{$datablog[0]['chitiet']}}
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
           
               
                    
                <input type="submit" value="Sửa" />

            </form>

        </div>



</div>

@endsection

