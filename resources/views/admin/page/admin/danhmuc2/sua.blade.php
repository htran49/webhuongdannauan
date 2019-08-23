@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục blog
@endsection
@section('contentadmin')

        

<div class="card">
                <form action="/admin-danhmuc2-danhsach/sua" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"  >
                   <label class="control-label mb-1">ID</label>
            <input class="form-control input-width" type="text" name="id" value="{{$datadanhmuc[0]['id']}} " />
                </div>

            <label >Tên loại blog:</label>
            <input type="text" name="namecate" class="form-control"  placeholder="{{$datadanhmuc[0]['tenloaiblog']}}" />

            <input type="submit" value="Sửa" />



          </div>


        </form>
      
@endsection

