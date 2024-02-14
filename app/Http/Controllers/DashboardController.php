<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

class DashboardController extends Controller
{
    // protected $userController;
    // public function __construct(UserController $userController)
    // {
    //     $this->userController = $userController;
    // }

    // public function index()
    // {
    //     $totalUser = $this->userController->count();
    //     return view('pages.dashboard', compact('totalUser'));
    // }
}
