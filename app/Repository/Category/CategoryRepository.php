<?php


namespace App\Repository\Category;


use App\Models\Category;
use App\Repository\AbstractRepo;

class CategoryRepository extends AbstractRepo
{

    /**
     * @inheritDoc
     */
    public function model()
    {
        return Category::class;
    }

    public function getAllCategories()
    {
        dd($this->model()::orderBy('id', 'desc'));
        return $this->model()::orderBy('id', 'desc');
    }

}
