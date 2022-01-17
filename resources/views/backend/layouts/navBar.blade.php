<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">

        </li>
    </ul>
    <!-- Right navbar links -->
    <div class="navbar-nav ml-auto">
        <span class="nav-link"> {{ Auth::user()->name }}</span>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger navbar-badge">{{ $totalNotification != 0 ? $totalNotification : '' }}</span>
            </a>
            @if(count($listNotification))
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-notification">
                @include('backend.common.notification_item')
                @if(count($listNotification) < $countAllNotification)
                    <a href="javascript:;" class="dropdown-item dropdown-footer see-more-notify">もっと見る</a>
                @endif
            </div>
            @endif
        </li>
        <a class="nav-link"href="{{ route('logout') }}">
            <i class="fas fa-sign-out-alt"></i>
            <span>ログアウト</span>
        </a>
    </div>
</nav>
<!-- /.navbar -->
