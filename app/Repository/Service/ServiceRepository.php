<?php


namespace App\Repository\Service;


use App\Models\Service;
use App\Repository\AbstractRepo;
use Illuminate\Http\Request;

class ServiceRepository extends AbstractRepo
{

    /**
     * @inheritDoc
     */
    public function model()
    {
        return Service::class;
    }

    public function store(Request $request)
    {
        $check = $this->hasFile('image', $request);
        if ($check)
        {
            $file = $request->image;
            $file->move('upload/images/service', $file->getClientOriginalName());
            $this->create([
                'name' => $request->name,
                'image' => $file->getClientOriginalName(),
                'content' => $request->content,
                'open_time' => $request->open_time,
                'close_time' => $request->close_time,
                'price' => $request->price,
            ]);

        } else {
            $this->create($request->all());
        }
    }

    public function update($id, $request)
    {
        $check = $this->hasFile('image', $request);
        if ($check)
        {
            $file = $request->image;
            $file->move('upload/images/service', $file->getClientOriginalName());
            $this->model::find($id)->update([
                'name' => $request->name,
                'image' => $file->getClientOriginalName(),
                'content' => $request->content,
                'open_time' => $request->open_time,
                'close_time' => $request->close_time,
                'price' => $request->price,
            ]);

        } else {
            $this->updateById($id,$request->all());
        }
    }
}
