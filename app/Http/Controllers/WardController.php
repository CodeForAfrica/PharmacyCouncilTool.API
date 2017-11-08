<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;

use Unlu\Laravel\Api\QueryBuilder;

class WardController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Ward, $request);
        
        // Single Ward
        if($request->limit && $request->limit == 1)
        {
            $ward = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $ward = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'ward' => $ward
            ],200);
        }
        else
        {
            $wards = $queryBuilder->build()->get();
            $status = 0;
            
            if($wards && count($wards) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'wards' => $wards
            ],200);
        }
    }

    public function show(Ward $ward)
    {
        $status = "";
        if($ward) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'ward' => $ward
        ], 200);
    }

    public function store(Request $request)
    {
        $ward = Ward::create($request->all());

        return response()->json([
            'status' => 201,
            'ward' => $ward
        ], 201);
    }

    public function update(Request $request, Ward $ward)
    {
        $ward->update($request->all());

        return response()->json([
            'status' => 200,
            'ward' => $ward
        ], 200);
    }

    public function delete(Ward $ward)
    {
        $ward->delete();

        return response()->json(null, 204);
    }
}
