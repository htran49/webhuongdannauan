@extends('admin.master')
@section('tieudetrangadmin')
Quản lý slide
@endsection
@section('contentadmin')

        

<div class="card">
                <form action="/admin-slide-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                   <label class="control-label mb-1">ID</label>
            <input class="form-control input-width" type="text" name="id" value="{{$dataslide[0]['id']}} " />
                </div>

            <label >Tên slide:</label>
            <input type="text" name="tenslide" class="form-control"  value="{{$dataslide[0]['tenslide']}}" />

            <label >Mô tả:</label>
            <input type="text" name="mota" class="form-control"  value="{{$dataslide[0]['mota']}}" />

            <label class="control-label mb-1">Ảnh:</label>
            <input  class="form-control input-width" Value="" type="file" name="anh"/>
            <input type="submit" value="Sửa" />



          </div>


        </form>
      
@endsection

