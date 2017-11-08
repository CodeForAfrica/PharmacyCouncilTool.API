<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;

use Unlu\Laravel\Api\QueryBuilder;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new District, $request);
        
        // Single District
        if($request->limit && $request->limit == 1)
        {
            $district = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $district = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'district' => $district
            ],200);
        }
        else
        {
            $districts = $queryBuilder->build()->get();
            $status = 0;
            
            if($districts && count($districts) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'districts' => $districts
            ],200);
        }
    }

    public function show(District $district)
    {
        $status = "";
        if($district) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'district' => $district
        ], 200);
    }

    public function store(Request $request)
    {
        $district = District::create($request->all());

        return response()->json([
            'status' => 201,
            'district' => $district
        ], 201);
    }

    public function update(Request $request, District $district)
    {
        $district->update($request->all());

        return response()->json([
            'status' => 200,
            'district' => $district
        ], 200);
    }

    public function delete(District $district)
    {
        $district->delete();

        return response()->json(null, 204);
    }
}
