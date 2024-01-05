<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repository\CategoryRepository;
use App\Models\Category;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    protected CategoryRepository $categoryRepository;
    private $field = ['id', 'category_id', 'name','status'];

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $data = $this->categoryRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns,$request->start_date,$request->end_date);
        if (!$data) {
            return response()->json(['error' => 'Records not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $category = $this->categoryRepository->create($data);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $category], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->getById($id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $category], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);
        return view('user.role.edit', compact('category'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryUpdateRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = $this->categoryRepository->getById($id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }
        $category = $request->only($this->field);
        return response()->json(['data' => $this->categoryRepository->update($category, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $category = $this->categoryRepository->getById($id);
        if (!$cataegory) {
            return response()->json(['error' => 'Account not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->categoryRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}