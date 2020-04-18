<?php

namespace App\Http\Controllers\Backend\Room;

use App\Http\Requests\Backend\Room\CreateRoomRequest;
use App\Http\Requests\Backend\Room\UpadateRoomRequest;
use App\Repository\Room\RoomRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    private $repository;
    public function __construct(RoomRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllRooms()
    {
        $rooms  = $this->repository->all()->sortByDesc('id');

        return view('Backend.room.index')->withRooms($rooms);
    }

    public function create()
    {
        return view('Backend.room.create')->withCategories($this->repository->getAllCategories());
    }

    public function store(CreateRoomRequest $request)
    {
        $this->repository->storeRoom($request);
        return redirect()->route('admin.rooms')->withFlashSuccess(__('alert.created'));
    }

    public function getFormUpdate($id, Request $request)
    {
        $room = $this->repository->updateRoom($id, $request);
        return view('Backend.room.update')->withRoom($room)
            ->withCategories($this->repository->getAllCategories());
    }

    public function destroy($id)
    {
        $this->repository->deleteById($id);
        return redirect()->route('admin.rooms')->withFlashSuccess(__('alert.deleted'));
    }

    public function update($id , UpadateRoomRequest $request)
    {
        $this->repository->updateRoom($id,$request);
        return redirect()->route('admin.rooms')->withFlashSuccess(__('alert.updated'));
    }

    public function getAllRoomActive()
    {
        $rooms = $this->repository->getAllRoomActive();
    }
}
