<?php


namespace App\Repository\Admin;


use App\Models\Admin;
use App\Repository\AbstractRepo;

class AdminRepository extends AbstractRepo
{

    /**
     * @inheritDoc
     */
    public function model()
    {
        return Admin::class;
    }

    public function changeInfo($id, $request)
    {
        if ($request->hasFile('avatar'))
        {
            $file = $request->avatar;
            $file->move('upload/admin', $file->getClientOriginalName());
            return $this->model()::whereId($id)->update([
                'name' => $request->name,
                'avatar' => $file->getClientOriginalName(),
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        } else {
            return $this->updateById($id,$request->all());
        }
    }

    public function changePassword($id)
    {
        dd('111');
    }


}
