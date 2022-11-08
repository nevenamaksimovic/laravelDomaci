<?php

namespace App\Http\Controllers;

use App\Models\CreditRequest;
use Illuminate\Http\Request;

class CreditRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CreditRequest::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = CreditRequest::create($request->all());
        return response()->json($req);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function show(CreditRequest $creditRequest)
    {
        return response()->json($creditRequest);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditRequest $creditRequest)
    {
        $creditRequest->update($request->all());
        return response()->json($creditRequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditRequest  $creditRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditRequest $creditRequest)
    {
        $creditRequest->delete();
        return response()->noContent();
    }
}
