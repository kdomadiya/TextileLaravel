<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\IncomeExpenseCreateRequest;
use App\Http\Requests\IncomeExpenseUpdateRequest;
use App\Repository\IncomeExpenseRepository;
use App\Models\IncomeExpense;
use App\Interfaces\IncomeExpenseRepositoryInterface;

class IncomeExpenseController extends Controller
{
    protected IncomeExpenseRepository $incomeExpenseRepository;
    private $field = ['id', 'group_id', 'name','alias','opening_balance','firstname','lastname','pancard','gst_number','mobile','email','address','status'];

    public function __construct(IncomeExpenseRepository $incomeExpenseRepository)
    {
        $this->incomeExpenseRepository = $incomeExpenseRepository;
    }

    public function index(Request $request)
    {
        $data = $this->incomeExpenseRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Income Expense not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(IncomeExpenseCreateRequest $request)
    {
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $incomeExpense = $this->incomeExpenseRepository->create($data);
        if (!$incomeExpense) {
            return response()->json(['error' => 'Income Expense not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $incomeExpense], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incomeExpense = $this->incomeExpenseRepository->getById($id);
        if (!$incomeExpense) {
            return response()->json(['error' => 'Account not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $incomeExpense], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $account = $this->incomeExpenseRepository->find($id);
        return view('user.role.edit', compact('userRole'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\IncomeExpenseUpdateRequest  $request
     * @param  \App\Models\IncomeExpense  $country
     * @return \Illuminate\Http\Response
     */
    public function update(IncomeExpenseUpdateRequest $request, $id)
    {
        $incomeExpense = $this->incomeExpenseRepository->getById($id);
        if (!$incomeExpense) {
            return response()->json(['error' => 'Group not found'], Response::HTTP_NOT_FOUND);
        }
        $incomeExpense = $request->only($this->field);
        return response()->json(['data' => $this->incomeExpenseRepository->update($incomeExpense, $id)], Response::HTTP_OK);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $company = $request->only($this->field);
        $incomeExpense = $this->incomeExpenseRepository->getById($id);
        if (!$incomeExpense) {
            return response()->json(['error' => 'Income Expense not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->incomeExpenseRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}