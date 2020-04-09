<?php

namespace App\Http\Controllers\Backend\Category;

use App\Repository\Category\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $repository;
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->all()->sortByDesc('id');
        return view('Backend.category.index',compact('categories'));
    }
}
