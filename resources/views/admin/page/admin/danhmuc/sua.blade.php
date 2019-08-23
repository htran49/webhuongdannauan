@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục
@endsection
@section('contentadmin')

        

<div class="card">
                <form action="/admin-danhmuc-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                   <label class="control-label mb-1">ID</label>
            <input class="form-control input-width" type="text" name="id" value="{{$datadanhmuc[0]['id']}} " />
                </div>

            <label >Tên danh mục:</label>
            <input type="text" name="namecate" class="form-control"  placeholder="{{$datadanhmuc[0]['tenloai']}}" />

            <label >Nhóm công thức:</label>
            <input type="text" name="namecate1" class="form-control"  placeholder="{{$datadanhmuc[0]['nhom_id']}}" />

            <input type="submit" value="Sửa" />



          </div>


        </form>
      
@endsection

