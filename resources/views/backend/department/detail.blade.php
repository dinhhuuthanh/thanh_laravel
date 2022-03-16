@extends('backend.layouts.master')
@section('title','Chi tiết phòng')
@section('content')
<div class="container">

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Thông tin tiết phòng</h3>
        </div>
        <div class="card-body">

          <div class=" row">
            <label for="name" class="col-sm-2 col-form-label">Tên Phòng</label>
            <div class="col-sm-10">
              <p id="name">{{$department->name}}</p>
            </div>
          </div>

          <div class=" row">
            <label for="email" class="col-sm-2 col-form-label">Mô Tả</label>
            <div class="col-sm-10">
              <p id="email">{{$department->description}}</p>
            </div>
          </div>
          <div class=" row">
            <label for="email" class="col-sm-2 col-form-label">Ngày Tạo</label>
            <div class="col-sm-10">
              <p id="email">{{date('d-m-Y', strtotime($department->created_at))}}</p>
            </div>
          </div>
          <div class=" row">
            <label for="email" class="col-sm-2 col-form-label">Người Quản Lý</label>
            <div class="col-sm-10">
              <p id="email"></p>
            </div>
          </div>


        </div>
        <!-- /.card-header -->

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

</div>
@endsection