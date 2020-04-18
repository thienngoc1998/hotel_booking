<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Requests\Backend\Service\CreateServiceRequest;
use App\Http\Requests\Backend\Service\UpdateServiceRequest;
use App\Repository\Service\ServiceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    private $repository;
    public function __construct(ServiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $services = $this->repository->all()->sortByDesc('id');
        return view('Backend.service.index',compact('services'));
    }

    public function create()
    {
        return view('Backend.service.create');
    }

    public function destroy($id)
    {
        $this->repository->deleteById($id);
        return redirect()->route('admin.service')->withFlashSuccess(__('alert.deleted'));
    }

    public function store(CreateServiceRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('admin.service')->withFlashSuccess(__('alert.created'));
    }

    public function getFormUpdate($id)
    {
        return view('Backend.service.update')->withService($this->repository->getById($id));
    }

    public function update(UpdateServiceRequest $request,$id)
    {
        $this->repository->update($id, $request);
        return redirect()->route('admin.service')->withFlashSuccess(__('alert.updated'));
    }
}
