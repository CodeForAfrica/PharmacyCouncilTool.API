<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

use Unlu\Laravel\Api\QueryBuilder;

class RegionController extends Controller
{
    public function index(Request $request)
    {
        $queryBuilder = new QueryBuilder(new Region, $request);
        
        // Single Region
        if($request->limit && $request->limit == 1)
        {
            $region = json_decode("{}");
            $status = 0;

            if(isset($queryBuilder->build()->get()[0]))
            {
                $region = $queryBuilder->build()->get()[0];
                $status = 200;
            }
            else
            {
                $status = 404;
            }

            return response()->json([
                'status' => $status,
                'region' => $region
            ],200);
        }
        else
        {
            $regions = $queryBuilder->build()->get();
            $status = 0;
            
            if($regions && count($regions) > 0) $status = 200;
            else $status = 404;

            return response()->json([
                'status' => $status,
                'regions' => $regions
            ],200);
        }
    }

    public function show(Region $region)
    {
        $status = "";
        if($region) $status = 200;
        else $status = 404;

        return response()->json([
            'status' => $status,
            'region' => $region
        ], 200);
    }

    public function store(Request $request)
    {
        $region = Region::create($request->all());

        return response()->json([
            'status' => 201,
            'region' => $region
        ], 201);
    }

    public function update(Request $request, Region $region)
    {
        $region->update($request->all());

        return response()->json([
            'status' => 200,
            'region' => $region
        ], 200);
    }

    public function delete(Region $region)
    {
        $region->delete();

        return response()->json(null, 204);
    }
}
