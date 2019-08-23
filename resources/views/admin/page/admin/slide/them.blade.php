@extends('admin.master')
@section('tieudetrangadmin')
Quản lý slide
@endsection
@section('contentadmin')

        
    <div class="card">
         <div class="card-body card-block">
            <form action="/admin-slide-danhsach/them" method="POST" enctype="multipart/form-data" class="form-horizontal">
              {{csrf_field()}}


           <label >Tên slide:</label>
           <input type="text" name="tenslide" class="form-control"   />

           <label >Mô tả:</label>
           <input type="text" name="mota" class="form-control"  />

           <label class="control-label mb-1">Ảnh:</label>
           <input  class="form-control input-width" Value="" type="file" name="anh"/>
           <input type="submit" value="Thêm" />
            </form>
         </div>
    </div>
           


        


      
    
@endsection

