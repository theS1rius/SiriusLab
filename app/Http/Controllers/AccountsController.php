<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Http\Requests\StoreAccountsRequest;
use App\Http\Requests\UpdateAccountsRequest;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountsRequest $request, Accounts $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accounts $accounts)
    {
        //
    }
}
