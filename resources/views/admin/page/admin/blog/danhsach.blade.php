@extends('admin.master')
@section('tieudetrangadmin')
Quản lý blog
@endsection
@section('contentadmin')

<table class="table table-borderless table-striped table-earning">
          <tr>
            <th>Id</th>
            <th>Danh mục blog</th>
            <th>Tiêu đề blog</th>
            <th>Ảnh giới thiệu</th>
       
           

          </tr>
          @foreach ($datablog as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td >{{$item['nhomblog_id']}}</td>
                <td>{{$item['tieudeblog']}}</td>
                <td><img src="../../public/img/blog-img/{{$item['anhmota']}}" alt="" width="100px"></td>   
                <td><a href="/admin-blog-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-blog-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>


@endsection

