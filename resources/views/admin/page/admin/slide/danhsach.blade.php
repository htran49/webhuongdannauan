@extends('admin.master')
@section('tieudetrangadmin')
Quản lý slide
@endsection
@section('contentadmin')
        
        <table class="table table-borderless table-striped table-earning">
          
          <tr>
            <th>Id</th>
            <th>Tên slide </th>
            <th>Ảnh </th>
          </tr>
          @foreach ($dataslide as $item)
          <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['tenslide']}}</td>
               
                <td><img src="../../public/img/slide-img/{{$item['anh']}}" alt=""></td>
                <td><a href="/admin-slide-danhsach/sua/{{$item['id']}}">Sửa</a></td>
                <td><a href="/admin-slide-danhsach/xoa/{{$item['id']}}">Xóa</a></td>
              </tr>
          @endforeach

        </table>
</section>

@endsection

