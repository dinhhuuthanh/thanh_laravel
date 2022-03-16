@extends('backend.layouts.master')
@section('title','Danh sách phòng')
@section('content')
<div class="container">

  <div class="row">
    <div class="col-12">
      <div class="col-2 p-0">
        <a type="button" href="{{route('department.create')}}" class="btn btn-block btn-secondary">Thêm</a>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh Sách Phòng Ban</h3>

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
                <th>Mô Tả</th>
                <th>Ngày Tạo</th>


              </tr>
            </thead>
            <tbody>
              @foreach ($departments as $department)
              <tr>
                <td>{{$department->id }}</td>
                <td>{{$department->name}}</td>
                <td>{{$department->description}}</td>
                <td>{{date('d-m-Y', strtotime($department->created_at))}}</td>

                <td><a href="{{ route('department.detail',$department->id) }}" type="button" class="btn btn-block btn-primary">Chi Tiết</a></td>
                <td><a type="button" class="btn btn-block btn-warning">Sửa</a></td>
                <td><a type="button" class="btn btn-block btn-danger">Xoá</a></td>
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