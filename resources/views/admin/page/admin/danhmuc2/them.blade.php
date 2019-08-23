@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục blog
@endsection
@section('contentadmin')

        
    <div class="card">
         <div class="card-body card-block">
            <form action="/admin-danhmuc2-danhsach/them" method="POST" enctype="multipart/form-data" class="form-horizontal">
              {{csrf_field()}}
              <div class="form-group"  >
                      <label class="control-label mb-1" >ID</label>
              <input class="form-control" type="text" name="id"  />
                  </div>
  
              <label >Tên loại blog:</label>
              <input type="text" name="namecate"    class="form-control" />
    
              <div class="card-footer">
              <input type="submit" value="Thêm" />
              </div>
            </form>
         </div>
    </div>
           


        


      
    
@endsection

