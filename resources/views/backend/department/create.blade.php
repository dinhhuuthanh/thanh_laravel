@extends('backend.layouts.master')
@section('title','Tạo Phòng')
@section('content')
<div class="container">
    
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">@yield('title') </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Tên Phòng</label>
                          <input type="text" class="form-control" id="name" >
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mô Tả</label>
                          <textarea  class="form-control" id="exampleInputPassword1" placeholder="Password"> </textarea>
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
                      </div>
                    </form>
                  </div>
              <!-- /.card -->
            </div>
          </div>
    
</div>
@endsection