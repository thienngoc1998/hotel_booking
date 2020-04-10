<?php


namespace App\Repository\Room;


use App\Models\Category;
use App\Models\Room;
use App\Repository\AbstractRepo;

class RoomRepository extends AbstractRepo
{

    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Room::class;
    }

    public function getAllCategories()
    {
        return Category::all();
    }

    public function storeRoom($request)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/room-list', $file->getClientOriginalName());
            return $this->model()::create([
                'name' => $request->name,
                'avatar' => $file->getClientOriginalName(),
                'amount_bed' => $request->amount_bed,
                'description' => $request->description,
                'id_cate' => $request->cate_type
            ]);
        }
        else {
            return $this->create($request->only('name','description','amount_bed','id_cate'));
        }
    }

    public function updateRoom($id, $request)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/images/room-list', $file->getClientOriginalName());
            return $this->model()::find($id)->update([
                'name' => $request->name,
                'avatar' => $file->getClientOriginalName(),
                'amount_bed' => $request->amount_bed,
                'description' => $request->description,
                'id_cate' => $request->cate_type
            ]);
        }
        else {
            return $this->updateById($id,$request->only('name','description','amount_bed','id_cate'));
        }
    }
}
