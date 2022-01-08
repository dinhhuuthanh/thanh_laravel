<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = $this->user->getUserLogin();
        dd($user);
        return view('welcome');
    }
}
