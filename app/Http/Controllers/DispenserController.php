<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dispenser;

use Unlu\Laravel\Api\QueryBuilder;

class DispenserController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Dispenser, $request);
        return response()->json([
            'dispensers' => $queryBuilder->build()->get()
        ],200);
    }

    public function show(Dispenser $dispenser)
    {
        return response()->json([
            'dispenser' => $dispenser
        ], 200);
    }

    public function store(Request $request)
    {
        $dispenser = Dispenser::create($request->all());

        return response()->json([
            'dispenser' => $dispenser
        ], 201);
    }

    public function update(Request $request, Dispenser $dispenser)
    {
        $dispenser->update($request->all());

        return response()->json([
            'dispenser' => $dispenser
        ], 200);
    }

    public function delete(Dispenser $dispenser)
    {
        $dispenser->delete();

        return response()->json(null, 204);
    }
}
