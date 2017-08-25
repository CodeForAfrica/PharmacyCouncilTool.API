<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Unlu\Laravel\Api\QueryBuilder;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new User, $request);
        return response()->json([
            'users' => $queryBuilder->build()->get()
        ],200);
    }

    public function show(User $user)
    {
        return response()->json([
            'user' => $user
        ], 200);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json([
            'user' => $user
        ], 201);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json([
            'user' => $user
        ], 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
