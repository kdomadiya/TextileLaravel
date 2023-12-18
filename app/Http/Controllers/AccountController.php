<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AccountCreateRequest;
use App\Http\Requests\AccountUpdateRequest;
use App\Repository\AccountRepository;
use App\Models\Account;
use App\Interfaces\AccountRepositoryInterface;

class AccountController extends Controller
{
    protected AccountRepository $accountRepository;
    private $field = ['id', 'account_id', 'amount','date','particular','type(income/expense)'];

    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    public function index(Request $request)
    {
        $data = $this->accountRepository->get($request->limit, $request->page, $request->search, $request->order_by, $request->order, $request->columns);
        if (!$data) {
            return response()->json(['error' => 'Records not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $data], Response::HTTP_OK);
    }

    public function create()
    {
        return view('user.role.create');
    }

    public function store(AccountCreateRequest $request)
    {
        $data = $request->only($this->field);
        // $data['password'] = bcrypt($data['password']);
        $account = $this->accountRepository->create($data);
        if (!$account) {
            return response()->json(['error' => 'Account not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $account], Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = $this->accountRepository->getById($id);
        if (!$account) {
            return response()->json(['error' => 'Account not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $account], Response::HTTP_OK);
    }
    public function edit($id)
    {
        $account = $this->accountRepository->find($id);
        return view('user.role.edit', compact('userRole'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AccountUpdateRequest  $request
     * @param  \App\Models\Account  $country
     * @return \Illuminate\Http\Response
     */
    public function update(AccountUpdateRequest $request, $id)
    {
        $account = $this->accountRepository->getById($id);
        if (!$account) {
            return response()->json(['error' => 'Group not found'], Response::HTTP_NOT_FOUND);
        }
        $account = $request->only($this->field);
        return response()->json(['data' => $this->accountRepository->update($account, $id)], Response::HTTP_OK);
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
        $account = $this->accountRepository->getById($id);
        if (!$account) {
            return response()->json(['error' => 'Account not found'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['data' => $this->accountRepository->delete($id)], Response::HTTP_NO_CONTENT);
    }
}