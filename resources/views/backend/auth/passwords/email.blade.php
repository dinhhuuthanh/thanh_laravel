@extends('backend.layouts.auth')
@section('title', 'パスワード再発行')
@section('content')
    <div class="login-box" style="width: 425px;">
        <div class="login-logo">
            <a href="{{ route('login') }}"><b>agaru.jp 管理掲示板</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">パスワード再発行</p>

                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="input-group mb-3 @if($errors->has('email')) error @endif">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="メールアドレス" autofocus/>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if($errors->has('email'))
                            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">パスワード再発行を送信する</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">ログイン画面へ戻る</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
