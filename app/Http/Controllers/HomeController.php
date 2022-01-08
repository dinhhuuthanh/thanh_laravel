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
        $allUser = $this->user->getAll();
        $userAdmin = $this->user->getUserLogin();
        dd($allUser, $userAdmin);
        return view('welcome');
    }
}
