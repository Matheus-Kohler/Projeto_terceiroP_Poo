<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customers::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerStoreRequest $request)
    {
        $data = $request->validated();

        $customer = Customers::create($data);

        return $customer;
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerUpdateRequest $request, Customers $customer)
    {
        $data = $request->validated();

        $customer->update($data);

        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customer)
    {
        $customer->delete();

        // 204 No Content
        return response()->json([
            'message' => 'cliente excluido',
        ], 204);
    }
}
