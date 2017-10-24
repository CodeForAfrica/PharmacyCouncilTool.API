<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacist;

use Unlu\Laravel\Api\QueryBuilder;

class PharmacistController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Pharmacist, $request);
        
        // Single Pharmacist
        if($request->limit && $request->limit == 1)
        {
            $pharmacist = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $pharmacist = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'pharmacist' => $pharmacist
            ],200);
        }
        else
        {
            $pharmacists = $queryBuilder->build()->get();
            $status = 0;
            
            if($pharmacists && count($pharmacists) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'pharmacists' => $pharmacists
            ],200);
        }
    }

    public function show(Pharmacist $pharmacist)
    {
        $status = "";
        if($pharmacist) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'pharmacist' => $pharmacist
        ], 200);
    }

    public function store(Request $request)
    {
        $pharmacist = Pharmacist::create($request->all());

        return response()->json([
            'status' => 201,
            'pharmacist' => $pharmacist
        ], 201);
    }

    public function update(Request $request, Pharmacist $pharmacist)
    {
        $pharmacist->update($request->all());

        return response()->json([
            'status' => 200,
            'pharmacist' => $pharmacist
        ], 200);
    }

    public function delete(Pharmacist $pharmacist)
    {
        $pharmacist->delete();

        return response()->json(null, 204);
    }
}
