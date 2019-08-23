@extends('admin.master')
@section('tieudetrangadmin')
Quản lý bài viết
@endsection
@section('contentadmin')

<table class="table table-borderless table-striped table-earning">
          <tr>
            <th>Id</th>
            <th>Danh mục</th>
            <th>Tiêu đề</th>
            <th>Ảnh giới thiệu</th>
            <th>Thời gian chuẩn bị</th>
            <th>Thời gian thực hiện</th>
            <th>Cấp độ</th>

          </tr>
          @foreach ($databaiviet as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td >{{$item['loai_id']}}</td>
                <td>{{$item['tieude']}}</td>
                <td><img src="public/img/{{$item['anhgioithieu']}}" alt="" width="100px"></td>
                <td>{{$item['thoigianchuanbi']}}</td>
                <td>{{$item['thoigianthuchien']}}</td>
                <td>{{$item['capdo']}}</td>
              
                <td><a href="/admin-baiviet-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="admin-baiviet-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>


@endsection

