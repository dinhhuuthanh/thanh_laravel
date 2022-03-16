@extends('backend.layouts.master')
@section('title','Danh Sách Nhân Viên')
@section('content')
<div class="container">
    
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Danh Sách Nhân Viên</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Phòng</th>
                        <th>Chức Vụ</th>
                        <th>Quyền</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->avatar}}</td>
                        <td>{{$user->department_id}}</td>
                        <td>{{$user->is_manager}}</td>
                        <td>{{$user->is_admin}}</td>
                        <td><a href="{{route('user.detail',['id'=>$user->id])}}" type="button" class="btn btn-block btn-primary">Chi Tiết</a></td>
                        <td><button type="button" class="btn btn-block btn-warning">Sửa</button></td>
                        <td><button type="button" class="btn btn-block btn-danger">Xoá</button></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    
</div>
@endsection