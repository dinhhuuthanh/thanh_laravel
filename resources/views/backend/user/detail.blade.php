@extends('backend.layouts.master')
@section('title','Chi tiết nhân viên')
@section('content')
<div class="container">
    
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Thông tin chi tiết nhân viên</h3>
                </div>
                <div class="card-body">
                   
                    <div class=" row">
                        <label for="name" class="col-sm-2 col-form-label">Tên</label>
                        <div class="col-sm-10">
                        <p id="name">{{$user->name}}</p>
                        </div>
                    </div>
                    <div class=" row">
                        <label for="avatar" class="col-sm-2 col-form-label">Ảnh</label>
                        <div class="col-sm-10">
                        <p id="email">{{$user->avatar}}</p>
                        </div>
                    </div>
                    <div class=" row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <p id="email">{{$user->email}}</p>
                        </div>
                    </div>
                    <div class=" row">
                        <label for="phone" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                        <div class="col-sm-10">
                        <p id="phone">{{$user->phone}}</p>
                        </div>
                    </div>
                    <div class=" row">
                        <label for="start_work" class="col-sm-2 col-form-label">Ngày Bắt Đầu </label>
                        <div class="col-sm-10">
                        <p id="start_work">{{date('d-m-Y', strtotime($user->start_work))}}</p>
                        </div>
                    </div>
                    <div class=" row">
                        <label for="department" class="col-sm-2 col-form-label">Phòng Ban</label>
                        <div class="col-sm-10">
                        <p id="department">{{$user->department_id}}</p>
                        </div>
                    </div>
                    <div class=" row">
                        <label for="position" class="col-sm-2 col-form-label">Chức Vụ</label>
                        <div class="col-sm-10">
                            @php
                                if($user->is_manager == 1){
                                    $position = 'Quản Lý';}
                                else {
                                    $position = 'Nhân viên';
                                }    
                                    
                            @endphp
                        <p id="position">{{$position}}</p>
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