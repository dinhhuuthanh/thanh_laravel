@extends('backend.layouts.auth')
@section('title', 'ログイン')
@section('content')
    <div class="login-box" style="width: 425px;">
        <div class="login-logo">
            <a href="{{ route('login') }}"><b>agaru.jp 管理掲示板</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">ログイン</p>
                @if (session('message'))
                    <div class="row">
                        <div class="alert alert-success col-12">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
                <form action="{{ route('postLogin') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="メールアドレス" autofocus/>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3 @if($errors->has('password')) error @endif">
                        <input type="password" class="form-control" name="password" placeholder="パスワード" autocomplete="current-password"/>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if($errors->has('password'))
                            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="row mb-2">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    ログインを記憶する
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">ログイン</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
