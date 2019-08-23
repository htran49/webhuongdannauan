<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaicongthuc;
use App\Loaiblog;
use App\Danhmucanh;
use App\Congthuc;
use App\Blog;
use App\Danhmucblog;
use App\Slide;
class adminController extends Controller
{
    //
    public function showAdmin(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
       return view('admin.page.admin.homeAdmin')->with('data',$data);
    }
    /*quanlydanhmuc*/
    public function danhSachDanhMuc(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
        $danhmuc='App\Loaicongthuc'::get();
        return view('admin.page.admin.danhmuc.danhsach')->with('datadanhmuc',$danhmuc)->with('data',$data);
    }
     public function deleteDanhMuc($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Loaicongthuc'::find($id)->delete();
            return redirect('/admin-danhmuc-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMuc(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            { $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
                $danhmuc='App\Loaicongthuc'::get();
                return view('admin.page.admin.danhmuc.them')->with('data',$data);;
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMuc(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Loaicongthuc();
            if($request->input('id')!="")$data->id=$request->input('id');
            else $data->id="chưa nhập";
            if($request->input('namecate')!="")$data->tenloai=$request->input('namecate');
            else $data->tenloai="chưa nhập";
            if($request->input('namecate1')!="")$data->nhom_id=$request->input('namecate1');
            else $data->nhom_id="chưa nhập";
            $data->save();
            return redirect('/admin-danhmuc-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMuc($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {$data1='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            $data='App\Loaicongthuc'::where('id',$id)->get();
            return view('admin.page.admin.danhmuc.sua')->with('datadanhmuc',$data)->with('data',$data1);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMuc(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Loaicongthuc();
            $data->id=$request->input('id');
            $datas='App\Loaicongthuc'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloai=$request->input('namecate');
            if($data->tenloai!="")$datas->tenloai=$data->tenloai;
            $data->nhom_id=$request->input('namecate1');
            if($data->nhom_id!="")$datas->nhom_id=$data->nhom_id;
            $datas->save();

            return redirect('/admin-danhmuc-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }

    /*quanlydanhmuc*/


     /*quanlydanhmuc*/
     public function danhSachDanhMuc1(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
        $danhmuc='App\Nhomcongthuc'::get();
        return view('admin.page.admin.danhmuc1.danhsach')->with('datadanhmuc',$danhmuc)->with('data',$data);
    }
     public function deleteDanhMuc1($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Nhomcongthuc'::find($id)->delete();
            return redirect('/admin-danhmuc1-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMuc1(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            { $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
                $danhmuc='App\Nhomcongthuc'::get();
                return view('admin.page.admin.danhmuc1.them')->with('data',$data);;
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMuc1(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Nhomcongthuc();
            if($request->input('id')!="")$data->id=$request->input('id');
            else $data->id="chưa nhập";
            if($request->input('namecate')!="")$data->tenloai=$request->input('namecate');
            else $data->tenloai="chưa nhập";
          
            $data->save();
            return redirect('/admin-danhmuc1-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMuc1($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {$data1='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            $data='App\Nhomcongthuc'::where('id',$id)->get();
            return view('admin.page.admin.danhmuc1.sua')->with('datadanhmuc',$data)->with('data',$data1);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMuc1(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Loaicongthuc();
            $data->id=$request->input('id');
            $datas='App\Loaicongthuc'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloai=$request->input('namecate');
            if($data->tenloai!="")$datas->tenloai=$data->tenloai;
           
            $datas->save();

            return redirect('/admin-danhmuc1-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }

    /*quanlydanhmuc*/

    /*quanlybaiviet*/
    public function danhSachBaiViet(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
        $data='App\Congthuc'::get();
        return view('admin.page.admin.baiviet.danhsach')->with('databaiviet',$data)->with('data',$data);
    }
     public function showUpdateBaiViet($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data1='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            $data='App\Congthuc'::where('id',$id)->get();
            return view('admin.page.admin.baiviet.sua')->with('databaiviet',$data)->with('data',$data1);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateBaiViet(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Congthuc();
            $data->id=$request->input('id');
            $datas='App\Congthuc'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tieude=$request->input('namepost');
            if($data->tieude!="")$datas->tieude=$data->tieude;
            $data->thoigianchuanbi=$request->input('thoigianchuanbi');
            if($data->thoigianchuanbi!="")$datas->thoigianchuanbi=$data->thoigianchuanbi;

            $data->thoigianthuchien=$request->input('thoigianthuchien');
            if($data->thoigianthuchien!="")$datas->thoigianthuchien=$data->thoigianthuchien;

            $data->khauphan=$request->input('khauphan');
            if($data->khauphan!="")$datas->khauphan=$data->khauphan;

            $data->capdo=$request->input('capdo');
            if($data->capdo!="")$datas->capdo=$data->capdo;

            $data->nguyenlieu=$request->input('nguyenlieu');
            if($data->nguyenlieu!="")$datas->nguyenlieu=$data->nguyenlieu;

            $data->cachclam=$request->input('cachclam');
            if($data->cachclam!="")$datas->cachclam=$data->cachclam;
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/',$random_file_name);
                $data->anhgioithieu = $random_file_name;
            }
            if($data->anhgioithieu!='')$datas->anhgioithieu=$data->anhgioithieu;
            $datas->save();

            return redirect('/admin-baiviet-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showThemBaiviet(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            return view('admin.page.admin.baiviet.them')->with('data',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function insertBaiviet(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            
            $data=new Congthuc();
            if($request->input('namepost')!="")$data->tieude=$request->input('namepost');
            else $data->tieude="chưa nhập";
            if($request->input('namecate')!="")$data->loai_id=$request->input('namecate');
            else $data->loai_id="chưa nhập";
            if($request->input('thoigianchuanbi')!="")$data->thoigianchuanbi=$request->input('thoigianchuanbi');
            else $data->thoigianchuanbi="chưa nhập";
            if($request->input('thoigianthuchien')!="")$data->thoigianthuchien=$request->input('thoigianthuchien');
            else $data->thoigianthuchien="chưa nhập";
            if($request->input('khauphan')!="")$data->khauphan=$request->input('khauphan');
            else $data->khauphan="chưa nhập";
            if($request->input('capdo')!="")$data->capdo=$request->input('capdo');
            else $data->capdo="chưa nhập";
            if($request->input('nguyenlieu')!="")$data->nguyenlieu=$request->input('nguyenlieu');
            else $data->nguyenlieu="chưa nhập";
            if($request->input('cachlam')!="")$data->cachlam=$request->input('cachlam');
            else $data->cachlam="chưa nhập";
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/',$random_file_name);
                $data->anhgioithieu = $random_file_name;
            }
            $data->save();
            return redirect('/admin-baiviet-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function deleteBaiviet($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Congthuc'::find($id)->delete();
            return redirect('/admin-baiviet-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }

    /*quanlybaiviet*/

    /*quanlyblog*/
    public function danhSachBlog(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
        $data='App\Blog'::get();
        return view('admin.page.admin.blog.danhsach')->with('datablog',$data)->with('data',$data);
    }
    public function showThemBlog(Request $request){

        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            return view('admin.page.admin.blog.them')->with('data',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function insertBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Blog();
            if($request->input('nameblog')!="")$data->tieudeblog=$request->input('nameblog');
            else $data->tieudeblog="chưa nhập";
            if($request->input('namecate')!="")$data->nhomblog_id=$request->input('namecate');
            else $data->nhomblog_id="chưa nhập";
            if($request->input('mota')!="")$data->mota=$request->input('mota');
            else $data->mota="chưa nhập";
            if($request->input('chitiet')!="")$data->chitiet=$request->input('chitiet');
            else $data->chitiet="chưa nhập";
            if($request->hasFile('anhmota'))
            {
                $img_file = $request->file('anhmota');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/blog-img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/blog-img/',$random_file_name);
                $data->anhmota = $random_file_name;
            }
            $data->save();
            return redirect('/admin-blog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function deleteBlog($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Blog'::find($id)->delete();
            return redirect('/admin-blog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showUpdateBlog($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data1='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            $data='App\Blog'::where('id',$id)->get();
            return view('admin.page.admin.blog.sua')->with('datablog',$data)->with('data',$data1);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateBlog(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Blog();
            $data->id=$request->input('id');
            $datas='App\Blog'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tieudeblog=$request->input('nameblog');
            if($data->tieudeblog!="")$datas->tieudeblog=$data->tieudeblog;
            $data->mota=$request->input('mota');
            if($data->mota!="")$datas->mota=$data->mota;
            $data->chitiet=$request->input('chitiet');
            if($data->chitiet!="")$datas->chitiet=$data->chitiet;
            if($request->hasFile('anhmota'))
            {
                $img_file = $request->file('anhmota');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/blog-img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/blog-img/',$random_file_name);
                $data->anhmota = $random_file_name;
            }
            if($data->anhmota!='')$datas->anhmota=$data->anhmota;
            $datas->save();

            return redirect('/admin-blog-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }

    /*quanlyblog*/


    /*quanlydanhmucblog*/
    public function danhSachDanhMuc2(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
        $danhmuc='App\Loaiblog'::get();
        return view('admin.page.admin.danhmuc2.danhsach')->with('datadanhmuc',$danhmuc)->with('data',$data);
    }
     public function deleteDanhMuc2($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Loaiblog'::find($id)->delete();
            return redirect('/admin-danhmuc2-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMuc2(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            { $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
                $danhmuc='App\Loaiblog'::get();
                return view('admin.page.admin.danhmuc2.them')->with('data',$data);;
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMuc2(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Loaiblog();
            if($request->input('id')!="")$data->id=$request->input('id');
            else $data->id="chưa nhập";
            if($request->input('namecate')!="")$data->tenloaiblog=$request->input('namecate');
            else $data->tenloaiblog="chưa nhập";
            $data->save();
            return redirect('/admin-danhmuc2-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMuc2($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {$data1='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            $data='App\Loaiblog'::where('id',$id)->get();
            return view('admin.page.admin.danhmuc2.sua')->with('datadanhmuc',$data)->with('data',$data1);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMuc2(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Loaiblog();
            $data->id=$request->input('id');
            $datas='App\Loaiblog'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloaiblog=$request->input('namecate');
            if($data->tenloaiblog!="")$datas->tenloaiblog=$data->tenloaiblog;
           
            $datas->save();

            return redirect('/admin-danhmuc2-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }


    /*quanlydanhmucblog*/

     /*quanlyslide*/
     public function danhSachSlide(){
        $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
        $slide='App\Slide'::get();
        return view('admin.page.admin.slide.danhsach')->with('dataslide',$slide)->with('data',$data);
    }
    public function deleteSlide($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Slide'::find($id)->delete();
            return redirect('/admin-slide-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemSlide(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            return view('admin.page.admin.slide.them')->with('data',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function insertSlide(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Slide();
            if($request->input('tenslide')!="")$data->tenslide=$request->input('tenslide');
            else $data->tenslide="chưa nhập";
            if($request->input('mota')!="")$data->mota=$request->input('mota');
            else $data->mota="chưa nhập";
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/slide-img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/slide-img/',$random_file_name);
                $data->anh = $random_file_name;
            }
            $data->save();
            return redirect('/admin-slide-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateSlide($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data1='App\Nguoidung'::where('id',request()->session()->get('id'))->get();
            $data='App\Slide'::where('id',$id)->get();
            return view('admin.page.admin.slide.sua')->with('dataslide',$data)->with('data',$data1);;
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateSlide(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Slide();
            $data->id=$request->input('id');
            $datas='App\Slide'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenslide=$request->input('tenslide');
            if($data->tenslide!="")$datas->tenslide=$data->tenslide;
            $data->mota=$request->input('mota');
            if($data->mota!="")$datas->mota=$data->mota;
            if($request->hasFile('anh'))
            {
                $img_file = $request->file('anh');

                $img_file_extension = $img_file->getClientOriginalExtension();
                $img_file_name = $img_file->getClientOriginalName();
                $random_file_name = str_random(4).'_'.$img_file_name;
                while(file_exists('/public/img/slide-img/'.$random_file_name))
                {
                    $random_file_name = str_random(4).'_'.$img_file_name;
                }

                $img_file->move('public/img/slide-img/',$random_file_name);
                $data->anh = $random_file_name;
            }
            if($data->anh!='')$datas->anh=$data->anh;
            $datas->save();

            return redirect('/admin-slide-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
      /*quanlyslide*/


       /*quanlydanhmucanh*/
       public function danhSachDanhMucAnh(){
        $danhmuc='App\Danhmucanh'::get();
        return view('admin.page.admin.danhmucanh.danhsach')->with('datadanhmuc',$danhmuc);
    }
     public function deleteDanhMucAnh($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            'App\Danhmucanh'::find($id)->delete();
            return redirect('/admin-danhmucanh-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function showThemDanhMucAnh(Request $request){
            if( $request->session()->has('id') && $request->session()->get('role')=='admin')
            {
                return view('admin.page.admin.danhmucanh.them');
            }
            else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
            else{
                return view('page.login');
            }

    }
     public function insertDanhMucAnh(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmucanh();
    
            if($request->input('namecate')!="")$data->tenloai=$request->input('namecate');
            else $data->tenloai="chưa nhập";
            $data->save();
            return redirect('/admin-danhmucanh-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }
    public function showUpdateDanhMucAnh($id,Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data='App\Danhmucanh'::where('id',$id)->get();
            return view('admin.page.admin.danhmucanh.sua')->with('datadanhmucanh',$data);
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }

    }
    public function updateDanhMucAnh(Request $request){
        if( $request->session()->has('id') && $request->session()->get('role')=='admin')
        {
            $data=new Danhmuc();
            $data->id=$request->input('id');
            $datas='App\Danhmucanh'::find($data->id);
            if($data->id!='')$datas->id=$data->id;
            $data->tenloai=$request->input('namecate');
            if($data->tenloai!="")$datas->tenloai=$data->tenloai;
            $datas->save();

            return redirect('/admin-danhmucanh-danhsach');
        }
        else if($request->session()->has('id') && $request->session()->get('role')=='user' )  return view('page.user.homeUser');
        else{
            return view('page.login');
        }


    }




       /*quanlydanhmucanh*/






}
