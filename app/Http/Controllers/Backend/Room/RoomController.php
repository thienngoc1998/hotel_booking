<?php

namespace App\Http\Controllers\Backend\Room;

use App\Http\Requests\Backend\Room\CreateRoomRequest;
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
    }

    public function getFormUpdate($id, Request $request)
    {
        $room = $this->repository->updateRoom($id, $request);
        return view('Backend.room.update');
    }
}
