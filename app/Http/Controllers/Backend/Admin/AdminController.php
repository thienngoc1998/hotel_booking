<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Requests\Backend\Admin\Auth\ChangeInfoRequest;
use App\Http\Requests\Backend\Admin\Auth\ChangePasswordRequest;
use App\Repository\Admin\AdminRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    private  $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getInfo($id)
    {
        return view('Backend.profile.profile');
    }

    public function changeInfo($id, ChangeInfoRequest $request)
    {
        dd('11');
        $this->repository->changeInfo($id,$request);
        return redirect()->back();
    }
    public function changePassword($id, ChangePasswordRequest $request)
    {
     dd('111');
    }
}
