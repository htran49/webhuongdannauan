@extends('admin.master')
@section('tieudetrangadmin')
Quản lý bài viết
@endsection
@section('contentadmin')
<div class="card">
        <h2>Sửa bài viết</h2>

          <div class="twothirds">
            <form action="/admin-baiviet-danhsach/sua" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group"  >
                       <label class="control-label mb-1">ID</label>
                <input class="form-control input-width" type="text" name="id" value="{{$databaiviet[0]['id']}}" />
                    </div>

                <label class="control-label mb-1">Tên công thức:</label>
                <input  class="form-control input-width" type="text" name="namepost"   value="{{$databaiviet[0]['tieude']}}" />
                <div class="form-group">
                                <p><label>Chọn loại công thức </label></p>
                                <select class="form-control input-width subcatefield" name="namecate" >
                                    <option value="2">Ăn vặt</option>
                                    <option value="3">Cá</option>
                                    <option value="4">Gà</option>
                                    <option value="5">Giảm cân</option>
                                    <option value="6">Halloween</option>
                                    <option value="7">Hàn Quốc</option>
                                    <option value="8">Heo</option>
                                    <option value="9">Món chay</option>
                                    <option value="10">Trung Quốc</option>
                                    <option value="11">Trung thu</option>
                                    <option value="12">Việt Nam</option>
                                    <option value="13">Tình nhân</option>
            
                                </select>
                        </div>
                <label class="control-label mb-1">Ảnh giới thiệu:</label>
                <input  class="form-control input-width" Value="" type="file" name="anh"/>
                <label class="control-label mb-1" >Thời gian chuẩn bị:</label>
                <input  class="form-control input-width" type="text" name="thoigianchuanbi"   value="{{$databaiviet[0]['thoigianchuanbi']}}" />
                <label class="control-label mb-1">Thời gian thực hiện:</label>
                <input  class="form-control input-width" type="text" name="thoigianthuchien"  value="{{$databaiviet[0]['thoigianthuchien']}}" />
                <label class="control-label mb-1">Khẩu phần:</label>
                <input  class="form-control input-width" type="text" name="khauphan"   value="{{$databaiviet[0]['khauphan']}}" />
                <label class="control-label mb-1">Cấp độ:</label>
                <input  class="form-control input-width" type="text" name="capdo"   value="{{$databaiviet[0]['capdo']}}" />
                <label class="control-label mb-1">Nguyên liệu:</label>
                <textarea name="nguyenlieu" id="" cols="20" rows="10">
                               {{$databaiviet[0]['nguyenlieu']}}
                </textarea>
              <label class="control-label mb-1">Cách làm:</label>
                <textarea name="cachlam" id="" cols="100" rows="10">
                                {{$databaiviet[0]['cachlam']}}
                </textarea>
           
               
                    
                <input type="submit" value="Sửa" />

            </form>

        </div>



</div>

@endsection

