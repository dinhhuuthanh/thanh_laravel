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
            @if (session('message'))
                <div class="row">
                    <div class="alert alert-danger col-12">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="pw-policies-text_reset">
                    <span>{{ __('message.auth.pw_length_policy') }}</span>
                </div>
                <div class="input-group mb-3 @if($errors->has('password')) error @endif">
                    <input type="password" class="form-control" name="password" placeholder="新しいパスワード" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if($errors->has('password'))
                        <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="input-group mb-3 @if($errors->has('password_confirmation')) error @endif">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="新しいパスワード（確認用）">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if($errors->has('password_confirmation'))
                        <span class="invalid-feedback">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">パスワード再発行</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{ route('login') }}">ログイン</a>
            </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
