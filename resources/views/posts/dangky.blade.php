@extends('layout.trangchu')
@section('content')



<div class="container">
  <div class="row">
   
    <div class="col-xl-8 m-auto">

      <h2 style="margin-top: 20px;" class="text-center">PHIẾU ĐĂNG KÝ HIẾN MÁU NHÂN ĐẠO</h2>
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      <form method="post" action="" accept-charset="UTF-8">
      @csrf
        <div class="mb-3">
          <label for="hoten" class="form-label">Họ và tên</label>
          <input type="text" name="hoten" class="form-control" id="hoten" placeholder="Nhập họ và tên">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Nhập địa chỉ email">
        </div>

        <div class="mb-3">
          <label for="namsinh" class="form-label">Năm sinh</label>
          <input type="text" name="namsinh" class="form-control" id="namsinh" placeholder="Năm sinh">
        </div>

        <div class="mb-3">
          <label for="cccd" class="form-label">CMND/CCCD</label>
          <input type="text" name="cccd" class="form-control" id="cccd" placeholder="Nhập CMND/CCCD">
        </div>

        <div class="mb-3">
          <label for="gioitinh" class="form-label">Giới tính</label>
          <input type="text" name="gioitinh" class="form-control" id="gioitinh" placeholder="Giới tính">
        </div>

        <div class="mb-3">
          <label for="nhommau" class="form-label">Nhóm máu</label>
          <input class="form-control" name="nhommau" id="nhommau" placeholder="Nhóm máu"></input>
        </div>

        <div class="text-center">
          <button style="margin-bottom: 10px;" type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
      </form>

    </div>
  </div>
</div>




@endsection