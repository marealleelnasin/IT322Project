<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json("SUCCESS: Retrieved all users");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json("SUCCESS: Request processed successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json("SUCCESS: Resource retrieved successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json("SUCCESS: Resource updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json("SUCCESS: Resource deleted successfully");
    }
}
