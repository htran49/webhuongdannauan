@extends('admin.master')
@section('tieudetrangadmin')
Quản lý danh mục
@endsection
@section('contentadmin')
        
        <table class="table table-borderless table-striped table-earning">
          
          <tr>
            <th>Id</th>
            <th>Tên danh mục </th>
            <th>Nhóm công thức </th>
          </tr>
          @foreach ($datadanhmuc as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['tennhom']}}</td>
                <td><a href="/admin-danhmuc1-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-danhmuc1-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

