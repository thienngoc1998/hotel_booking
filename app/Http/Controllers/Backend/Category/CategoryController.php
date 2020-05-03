<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
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
        $categories = Category::orderBy('id','desc')->paginate(5);
        return view('Backend.category.index',compact('categories'));
    }
    public function destroy($id)
    {
        $this->repository->deleteById($id);
        return redirect()->back()->withFlassSuccess(__('alert.deleted'));
    }

    public function create()
    {
        return view('Backend.category.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $active = $this->isActiveExist($request);
        Category::create([
           'name' => $request->name,
           'active' => $active
        ]);
        return redirect()->route('admin.categories')->withFlassSuccess(__('alert.created'));
    }

    public function isActiveExist($request)
    {
        return isset($request->status);
    }

    public function detail($id)
    {
        return view('Backend.category.detail')->withCategory(Category::findOrFail($id));
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        Category::find($id)->update([
            'name' => $request->name,
            'active' => $request->status
        ]);
        return redirect()->route('admin.categories')->withFlassSuccess(__('alert.updated'));
    }
}
